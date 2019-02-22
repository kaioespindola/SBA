<?php
namespace App\Controller;

use App\Controller\AppController;

class CanaisController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();
    }

    public function aovivo() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->set('canais', $this->Canais->find('all', [
            'contain' => ['Programas']
            ]
        ));

        $this->loadModel('Programacao');

        $hoje = date('w');

        $agora = date('H:i:s');

        $this->set('agora', date('H:i'));

        if($hoje == '7') {

            $this->set('agoranocb', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 1,
                    'dia =' => 'domingo',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnocb', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 1,
                    'dia =' => 'domingo',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

            $this->set('agoranoac', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 2,
                    'dia =' => 'domingo',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnoac', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 2,
                    'dia =' => 'domingo',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

            $this->set('agoranocm', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 5,
                    'dia =' => 'domingo',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnocm', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 5,
                    'dia =' => 'domingo',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

        }

        if($hoje == '6') {

            $this->set('agoranocb', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 1,
                    'dia =' => 'sabado',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnocb', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 1,
                    'dia =' => 'sabado',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

            $this->set('agoranoac', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 2,
                    'dia =' => 'sabado',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnoac', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 2,
                    'dia =' => 'sabado',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

            $this->set('agoranocm', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 5,
                    'dia =' => 'sabado',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnocm', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 5,
                    'dia =' => 'sabado',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

        }

        if($hoje == '1' || $hoje == '2' || $hoje == '3' || $hoje == '4' || $hoje == '5') {

            $this->set('agoranocb', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 1,
                    'dia =' => 'semana',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnocb', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 1,
                    'dia =' => 'semana',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

            $this->set('agoranoac', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 2,
                    'dia =' => 'semana',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnoac', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 2,
                    'dia =' => 'semana',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

            $this->set('agoranocm', $this->Programacao->find('all', [
                'order' => ['time' => 'DESC'],
                'conditions' => [
                    'canal_id' => 5,
                    'dia =' => 'semana',
                    'time <=' => $agora
                    ],
                'limit' => 1
            ]));

            $this->set('depoisnocm', $this->Programacao->find('all', [
                'order' => ['time' => 'ASC'],
                'conditions' => [
                    'canal_id' => 5,
                    'dia =' => 'semana',
                    'time >=' => $agora
                    ],
                'limit' => 6
            ]));

        };

        $this->set('_serialize', ['agoranocb','depoisnocb','agoranoac','depoisnoac','agoranocm','depoisnocm']);

    }

    public function assistir($slug = null) {

        $this->viewBuilder()->setLayout('vazio');

        $canal = $this->Canais
        ->findBySlug($slug)
        ->firstOrFail();

        $this->set('canal', $canal);

    }

}