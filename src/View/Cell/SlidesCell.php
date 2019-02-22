<?php
namespace App\View\Cell;

use Cake\View\Cell;

class SlidesCell extends Cell {

    public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Noticias');

        $horario = date('Y-m-d H:i:s');

        $slide1 = $this->Noticias->find('all', ['conditions' => [
            'date <=' => $horario,'privacidade' => 1,
            ]])->order(['Noticias.date' => 'DESC'])->contain(['Categories'])->first();

        $slides1 = $this->Noticias->find('all', ['conditions' =>[
            'date <=' => $horario,'privacidade' => 1,
            ]])->limit(3)->order(['Noticias.date' => 'DESC'])->contain(['Categories'])->skip(1);

        $this->set('slide1', $slide1);
        $this->set('slides1', $slides1);

    }

}