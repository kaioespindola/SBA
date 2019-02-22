<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class FacasController extends AppController {

    public function initialize() {

        parent::initialize();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['pesquisar']
        ]);

    }

    public function pesquisar() {

        $query = $this->Facas

            ->find('search', ['search' => $this->request->getQueryParams()])
            ->order(['id' => 'DESC'])
            ->where(['name IS NOT' => null]);

        $this->set('facas', $this->paginate($query));

    }

    public function index() {

        $horario = date('Y-m-d H:i:s');

        $this->paginate = [
            'order' => ['lote' => 'ASC'],
            'limit' => 50
        ];
        $this->set('facas', $this->paginate($this->Facas->find('all')));
        $this->set('_serialize', ['facas']);

    }

    public function adicionar() {

        $faca = $this->Facas->newEntity();
        if ($this->request->is('post')) {
            $leilao = $this->Facas->patchEntity($faca, $this->request->data);
            if ($this->Facas->save($faca)) {
                $this->Flash->success(__('Faca foi adicionada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta faca não pode ser adicionada, tente novamente.'));
            }
        }
        $this->set(compact('faca'));
        $this->set('_serialize', ['faca']);
    }

    public function editar($id = null) {

        $faca = $this->Facas->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $faca = $this->Facas->patchEntity($faca, $this->request->data);
            if ($this->Facas->save($faca)) {
                $this->Flash->success(__('Esta faca foi editada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição da faca não pode ser concluida, tente novamente.'));
            }
        }
        $this->set(compact('faca'));
        $this->set('_serialize', ['faca']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $faca = $this->Facas->get($id);
        if ($this->Facas->delete($faca)) {
            $this->Flash->success(__('Faca deleata com sucesso.'));
        } else {
            $this->Flash->error(__('Esta faca não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}