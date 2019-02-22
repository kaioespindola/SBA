<?php
namespace App\View\Cell;

use Cake\View\Cell;

class LeiloesCell extends Cell {

    public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Leiloes');

        $horario = date('Y-m-d H:i:s');

        $this->set('leiloes', $this->Leiloes->find('all', [
            'contain' => ['Leiloeiras','Canais'],
            'conditions' => [
                'date >=' => $horario
            ],
            'order' => ['date' => 'ASC'],
            'limit' => 10
        ]));

    }

}