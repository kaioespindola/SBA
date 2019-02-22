<?php
namespace App\Controller;

use App\Controller\AppController;

class ProgramacaoController extends AppController {

    public function initialize() {

    	parent::initialize();
    	$this->Auth->allow();

    }

    public function index() {

         $this->loadModel('Canais');

        $this->set('canais', $this->Canais->find('all'));

        $this->set('semanacb', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 1,
            ],
        ]));

        $this->set('sabadocb', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 1,
            ],
        ]));

        $this->set('domingocb', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 1,
            ],
        ]));

        $this->set('semanaac', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 2,
            ],
        ]));

        $this->set('sabadoac', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 2,
            ],
        ]));

        $this->set('domingoac', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 2,
            ],
        ]));

        $this->set('semanacx', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 3,
            ],
        ]));

        $this->set('sabadocx', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 3,
            ],
        ]));

        $this->set('domingocx', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 3,
            ],
        ])); 

        $this->set('semananc', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 4,
            ],
        ]));

        $this->set('sabadonc', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 4,
            ],
        ]));

        $this->set('domingonc', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 4,
            ],
        ]));

        $this->set('semanacm', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 5,
            ],
        ]));

        $this->set('sabadocm', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 5,
            ],
        ]));

        $this->set('domingocm', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 5,
            ],
        ]));

        $this->set('_serialize', ['semanacb','sabadocb','domingocb','semanaac','sabadoac','domingoac','semanacx','sabadocx','domingocx','semananc','sabadonc','domingonc','semanacm','sabadocm','domingocm']);

    }

}