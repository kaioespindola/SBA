<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class RolesController extends AppController {

	public function index() {

        $this->set('roles', $this->paginate($this->Roles));
        $this->set('_serialize', ['roles']);

	}

    public function adicionar() {

        $role = $this->Roles->newEntity();
        if ($this->request->is('post')) {
            $role = $this->Roles->patchEntity($role, $this->request->data);
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('Cargo adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este cargo não pode ser adicionado, tente novamente.'));
            }
        }
        $this->set(compact('role'));
        $this->set('_serialize', ['role']);
    }

    public function editar($id = null) {

        $role = $this->Roles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->data);
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('Este cargo foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição do cargo não pode ser concluida, tente novamente.'));
            }
        }
        $this->set(compact('role'));
        $this->set('_serialize', ['role']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('Cargo deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Este cargo não pode ser deletado.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
