<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class UsersController extends AppController {

    public function index() {

        $this->paginate = [
            'contain' => ['Roles']
        ];

        $this->set('users', $this->paginate($this->Users->find('all')));
        $this->set('_serialize', ['users']);

    }

    public function adicionar() {

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este usuário não pode ser adicionado, tente novamente.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
        $this->set('_serialize', ['user']);
    }

    public function editar($id = null) {

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Este usuário foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição do usuário não pode ser concluida, tente novamente.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
        $this->set('_serialize', ['user']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Users->get($id);
        if ($this->Users->delete($role)) {
            $this->Flash->success(__('Usuário deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Este usuário não pode ser deletado.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}