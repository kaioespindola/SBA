<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class NoticiasController extends AppController {

    public function initialize() {

        parent::initialize();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['pesquisar']
        ]);

    }

	public function index() {

        $horario = date('Y-m-d H:i:s');

        if($this->Auth->user('role_id') == 1 || 2) {

            $this->paginate = [
                'order' => ['date' => 'DESC'],
                'contain' => ['Categories','Programas','Users','Tags'],
                'conditions' => [
                    'date <=' => $horario
                    ],
            ];

            $this->set('programadas', $this->Noticias->find('all', [
                'order' => ['date' => 'DESC'],
                'contain' => ['Categories','Programas','Users','Tags'],
                'conditions' => [
                    'date >=' => $horario
                    ]
                ]));

            $this->set('noticias', $this->paginate($this->Noticias->find('all')));

            $this->set('_serialize', ['noticias','programadas']);

        }

        else {

            $this->paginate = [
                'order' => ['date' => 'DESC'],
                'contain' => ['Categories','Programas','Users','Tags'],
                'conditions' => [
                    'user_id' => $this->Auth->user('id'),
                    'date <=' => $horario
                    ],
            ];

            $this->set('programadas', $this->Noticias->find('all', [
                'contain' => ['Categories','Programas','Users','Tags'],
                'conditions' => [
                    'user_id' => $this->Auth->user('id'),
                    'date >=' => $horario
                    ]
                ]));

            $this->set('noticias', $this->paginate($this->Noticias->find('all')));

            $this->set('_serialize', ['noticias','programadas']);

        }

        $programas = $this->Noticias->Programas->find('all', [
            'order' => ['name' => 'ASC'],
            'fields' => [
                'id','slug','name'
            ]
        ]);

        $this->set(compact('programas'));
	}

    public function pesquisar() {

        $horario = date('Y-m-d H:i:s');

        $query = $this->Noticias

            ->find('search', ['search' => $this->request->getQueryParams()])
            ->order(['date' => 'DESC'])
            ->contain(['Categories'])
            ->where(['name IS NOT' => null]);

        $this->set('noticias', $this->paginate($query));

    }

    public function programa($slug = null) {

        $this->loadModel('Programas');

        $horario = date('Y-m-d H:i:s');

        // Dados Programa //

        $programa = $this->Programas
        ->findBySlug($slug)
        ->firstOrFail();

        $this->set('programa', $programa);

        // Dados Listagem Programas //

        $programas = $this->Noticias->Programas->find('all', [
            'order' => ['name' => 'ASC'],
            'fields' => [
                'id','slug','name'
            ]
        ]);

        $this->set(compact('programas'));

        // Dados Notícias //

        if($this->Auth->user('role_id') == 1 || 2) {

            $this->paginate = [
                'order' => ['date' => 'DESC'],
                'contain' => ['Categories','Programas','Users','Tags'],
                'conditions' => [
                    'date <=' => $horario
                    ],
            ];

            $noticias = $this->paginate($this->Noticias
            ->find('all')
            ->contain(['Programas'])
            ->matching('Programas', function ($q) use ($slug) {
                return $q->where(['Programas.slug' => $slug]);
            }));

        } 

        else {

            $this->paginate = [
                'order' => ['date' => 'DESC'],
                'contain' => ['Categories','Programas','Users','Tags'],
                'conditions' => [
                    'date <=' => $horario,
                    'user_id' => $this->Auth->user('id'),
                    ],
            ];

            $noticias = $this->paginate($this->Noticias
            ->find('all')
            ->contain(['Programas'])
            ->matching('Programas', function ($q) use ($slug) {
                return $q->where(['Programas.slug' => $slug]);
            }));
        }

        $this->set('noticias', $noticias);

        $this->set('_serialize', ['noticias','programadas']);

    }

    public function adicionar() {

        $ano = date('Y');
        $mes = date('m');

        $noticia = $this->Noticias->newEntity();
        if ($this->request->is('post')) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            $noticia->user_id = $this->Auth->user('id');
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('Notícia adiciona com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta notícia não pode ser salva, tente novamente.'));
            }
        }

        $programas = $this->Noticias->Programas->find('list', ['limit' => 200]);
        $categories = $this->Noticias->Categories->find('treeList');
        $tags = $this->Noticias->Tags->find('list', ['limit' => 200]);
        $this->set(compact('categories','programas','tags'));

    }

    public function editar($id = null) {

        $ano = date('Y');
        $mes = date('m');

        $noticia = $this->Noticias->get($id, [
            'contain' => ['Tags','Categories','Programas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('Notícia editada com suceeso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta notícia não pode ser editada, tente novamente.'));
            }
        }

        $programas = $this->Noticias->Programas->find('list', ['limit' => 200]);
        $categories = $this->Noticias->Categories->find('treeList');
        $tags = $this->Noticias->Tags->find('list', ['limit' => 200]);
        $this->set(compact('noticia','categories','programas','tags'));
        $this->set('_serialize', ['noticia']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $noticia = $this->Noticias->get($id);
        if ($this->Noticias->delete($noticia)) {
            $this->Flash->success(__('Notícia deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Esta notícia não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}