<?php
namespace App\View\Cell;

use Cake\View\Cell;

class CategoriasCell extends Cell {

	public function display() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $this->loadModel('Categories');

        $this->set('categorias', $this->Categories->find('all', [
        	'order' => ['name' => 'ASC'
        ]]));

        $this->set('_serialize', ['categorias']);

	}

}