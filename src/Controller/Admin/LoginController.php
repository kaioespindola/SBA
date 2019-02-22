<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class LoginController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {

        $this->Auth->allow('login');
        
    }

	public function index() {

        $this->viewBuilder()->setLayout('vazio');

        if(!empty($this->request->session()->read('Auth.User.name'))) {
            return $this->redirect(
            ['controller' => 'Admin', 'action' => 'index']
        );
        }

        else {

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuário ou senha estão incorretos');
        }
    }
	}

    public function deslogar() {

        $this->Flash->success('Parabéns você deslogou com sucesso!');
        return $this->redirect($this->Auth->logout());

    }

}