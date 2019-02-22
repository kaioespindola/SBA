<?php
namespace App\View\Cell;

use Cake\View\Cell;

class MateriasCell extends Cell {

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
        ->limit(10)
        ->where(['date <=' => $horario])
        ->matching('Categories', function ($q) {
            return $q->where(['Categories.name' => 'Materias']);
        });

        $this->set('noticias', $noticias);


    }

}