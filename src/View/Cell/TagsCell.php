<?php
namespace App\View\Cell;

use Cake\View\Cell;

class TagsCell extends Cell {

	public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Tags');

        $this->set('tags', $this->Tags->find('all', [
                'order' => ['name' => 'ASC'],
                'fields' => ['id','name','slug']
        ]));

        $this->set('_serialize', ['tags']);

	}

}