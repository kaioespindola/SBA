<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class LeiloesController extends AppController {

    public function initialize() {

        parent::initialize();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['pesquisar']
        ]);

    }

    public function pesquisar() {

        $horario = date('Y-m-d H:i:s');

        $query = $this->Leiloes

            ->find('search', ['search' => $this->request->getQueryParams()])
            ->order(['date' => 'DESC'])
            ->where(['name IS NOT' => null]);

        $this->set('leiloes', $this->paginate($query));

    }

    public function index() {

        $horario = date('Y-m-d H:i:s');

        $this->paginate = [
            'order' => ['date' => 'ASC'],
            'contain' => ['Canais', 'Leiloeiras'],
            'conditions' => ['date >=' => $horario]
        ];
        $this->set('leiloes', $this->paginate($this->Leiloes->find('all')));
        $this->set('_serialize', ['leiloes']);

    }

    public function arquivo() {
        
        $horario = date('Y-m-d H:i:s');

        $this->paginate = [
            'order' => ['date' => 'DESC'],
            'contain' => ['Canais', 'Leiloeiras'],
            'conditions' => ['date <=' => $horario]
        ];
        $this->set('leiloes', $this->paginate($this->Leiloes->find('all')));
        $this->set('_serialize', ['leiloes']);

    }

    public function adicionar() {

        $leilao = $this->Leiloes->newEntity();
        if ($this->request->is('post')) {
            $leilao = $this->Leiloes->patchEntity($leilao, $this->request->data);
            if ($this->Leiloes->save($leilao)) {
                $this->Flash->success(__('O leilão foi adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este leilão não pode ser adicionada, tente novamente.'));
            }
        }
        $leiloeiras = $this->Leiloes->Leiloeiras->find('list', ['limit' => 500,'order' => ['name' => 'ASC']]);
        $canals = $this->Leiloes->Canais->find('list', ['limit' => 200]);
        $this->set(compact('leilao','leiloeiras','canals'));
        $this->set('_serialize', ['leilao']);
    }

    public function editar($id = null) {

        $leilao = $this->Leiloes->get($id, [
            'contain' => ['Canais','Leiloeiras']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leilao = $this->Leiloes->patchEntity($leilao, $this->request->data);
            if ($this->Leiloes->save($leilao)) {
                $this->Flash->success(__('Este leilão foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição do leilão não pode ser concluida, tente novamente.'));
            }
        }
        $leiloeiras = $this->Leiloes->Leiloeiras->find('list', ['limit' => 500,'order' => ['name' => 'ASC']]);
        $canals = $this->Leiloes->Canais->find('list', ['limit' => 200]);
        $this->set(compact('leilao','canals','leiloeiras'));
        $this->set('_serialize', ['leilao','canais']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $leilao = $this->Leiloes->get($id);
        if ($this->Leiloes->delete($leilao)) {
            $this->Flash->success(__('Leilão deleato com sucesso.'));
        } else {
            $this->Flash->error(__('Este leilão não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}