<?php

namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller {

    public function isAuthorized($user) {

        return true;
    }

    public function initialize() {

        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);

        $this->loadComponent('Flash');
        
        $this->loadComponent('Auth', [
            'authorize'=> 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                        ]
                    ]
                ],

            'loginAction' => [
                'controller' => 'login',
                'action' => 'index',
            ],
        'authError' => 'Você não tem autorização para acessar esta página',
        'unauthorizedRedirect' => $this->referer()
        ]);

        if ($this->request->getParam('prefix') === 'admin') {
            $this->viewBuilder()->setLayout('admin');
        }
        if ($this->request->getParam('prefix') === '') {
            $this->viewBuilder()->setLayout('default');
        }

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

    }
}
