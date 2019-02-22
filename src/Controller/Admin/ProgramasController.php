<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class ProgramasController extends AppController {


    public function index() {

        $this->paginate = [
            'order' => ['name' => 'ASC'],
            'contain' => ['Canais']
        ];
        $this->set('programas', $this->paginate($this->Programas->find('all')));
        $this->set('_serialize', ['programas']);

    }

    public function pesquisar() {

    }

    public function adicionar() {

        $programa = $this->Programas->newEntity();
        if ($this->request->is('post')) {
            $programa = $this->Programas->patchEntity($programa, $this->request->data);
            if ($this->Programas->save($programa)) {
                $this->Flash->success(__('O programa foi adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este programa não pode ser adicionada, tente novamente.'));
            }
        }
        $canals = $this->Programas->Canais->find('list', ['limit' => 200]);
        $this->set(compact('programas','canals'));
        $this->set('_serialize', ['programas']);

    }

    public function editar($id = null) {

        $programa = $this->Programas->get($id, [
            'contain' => ['Canais']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programa = $this->Programas->patchEntity($programa, $this->request->data);
            if ($this->Programas->save($programa)) {
                $this->Flash->success(__('Este programa foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição do programa não pode ser concluida, tente novamente.'));
            }
        }
        $canals = $this->Programas->Canais->find('list', ['limit' => 200]);
        $this->set(compact('programa','canals'));
        $this->set('_serialize', ['programa']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $programa = $this->Programas->get($id);
        if ($this->Programas->delete($programa)) {
            $this->Flash->success(__('Programa deleato com sucesso.'));
        } else {
            $this->Flash->error(__('Este programa não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}