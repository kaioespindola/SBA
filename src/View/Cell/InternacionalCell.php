<?php
namespace App\View\Cell;

use Cake\View\Cell;

class InternacionalCell extends Cell {

    public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Noticias');

        $horario = date('Y-m-d H:i:s');

        $noticias = $this->Noticias
        ->find('all')
        ->contain(['Categories'])
        ->order(['date' => 'DESC'])
        ->limit(4)
        ->matching('Categories', function ($q) {
            return $q->where(['Categories.name' => 'Internacional']);
        });

        $this->set('noticias', $noticias);


    }

}