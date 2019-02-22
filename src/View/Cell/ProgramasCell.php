<?php
namespace App\View\Cell;

use Cake\View\Cell;

class ProgramasCell extends Cell {

    public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Programas');

        $this->set('programas', $this->Programas->find('all', [
            'order' => ['name' => 'ASC'],
            'conditions' => [
            	'privacidade' => 1
            ],
            'limit' => 99
        ]));

        $this->set('_serialize', ['programas']);

    }

}