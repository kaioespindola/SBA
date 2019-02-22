<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class PaginasController extends AppController {

    public $components = array(
        'Search.Prg'
    );

	public function index() {

        $this->paginate = [
            'order' => ['name' => 'ASC'],
            'contain' => ['Users']
        ];

        $this->set('paginas', $this->paginate($this->Paginas->find('treeList', [
            'spacer' => '&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:20px;"><strong>-</strong></b>&nbsp;&nbsp;&nbsp;&nbsp;'
        ])));

        $this->set('detalhes', $this->Paginas->find('all', [
            'contain' => [
                'Users' => [
                    'fields' => ['id','name']
                    ]
                ]
        ]));

        $this->set('_serialize', ['paginas','detalhes']);

	}

    public function pesquisar() {

        $this->Prg->commonProcess();

        $this->paginate = [
            'order' => ['name' => 'ASC']
        ];

        $this->set('paginas', $this->paginate($this->Paginas->find('searchable', $this->Prg->parsedParams())));
        $this->set('_serialize', ['paginas']);
    }

	public function adicionar() {

        $pagina = $this->Paginas->newEntity();
        if ($this->request->is('post')) {
            $pagina = $this->Paginas->patchEntity($pagina, $this->request->data);
            if ($this->Paginas->save($pagina)) {
                $this->Flash->success(__('Página adiciona com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta página não pode ser salva, tente novamente.'));
            }
        }

        $parentCategories = $this->Paginas->ParentCategories->find('treeList', [
            'limit' => null
            ]);

        $this->set(compact('parentCategories'));
	}

    public function editar($id = null) {

        $pagina = $this->Paginas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagina = $this->Paginas->patchEntity($pagina, $this->request->data);
            if ($this->Paginas->save($pagina)) {
                $this->Flash->success(__('Página editada com suceeso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta Página não pode ser editada, tente novamente.'));
            }
        }
        $parentCategories = $this->Paginas->ParentCategories->find('treeList', ['limit' => 200]);
        $this->set(compact('pagina', 'parentCategories'));
        $this->set('_serialize', ['pagina']);
    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $pagina = $this->Paginas->get($id);
        if ($this->Paginas->delete($pagina)) {
            $this->Flash->success(__('Página deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Esta página não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}