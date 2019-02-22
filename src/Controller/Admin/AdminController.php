<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class AdminController extends AppController {

	public function index() {

		$this->loadModel('Noticias');
		$this->loadModel('Leiloes');

        // Widgets //

        $horario = date('Y-m-d H:i:s');

        $this->set('noticias', $this->Noticias->find('all', [
        	'order' => ['date' => 'DESC'],
            'fields' => ['id','name','date','created','modified','slug','destaque','privacidade'],
            'conditions' => [
                'date <=' => $horario
                ],
            'limit' => 6
        ]));

        $this->set('leiloes', $this->Leiloes->find('all', [
            'order' => ['date' => 'ASC'],
            'fields' => ['id','name','date'],
            'conditions' => [
                'date >=' => $horario
                ],
            'limit' => 6
        ]));

	}

}