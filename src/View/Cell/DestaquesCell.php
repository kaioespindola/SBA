<?php
namespace App\View\Cell;

use Cake\View\Cell;

class DestaquesCell extends Cell {

    public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Noticias');

        $horario = date('Y-m-d H:i:s');

        $noticias = $this->Noticias->find('all', ['conditions' => [
            'date <=' => $horario,'privacidade' => 1,
            'destaque' => 1,
            ]])->limit(4)->order(['Noticias.date' => 'DESC'])->contain(['Categories']);

        $this->set('noticias', $noticias);

    }

}