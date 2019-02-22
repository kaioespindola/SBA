<?php
namespace App\Controller;

use App\Controller\AppController;

class LeiloesController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();
    }

    public function index() {

        $this->paginate = [
            'order' => ['date' => 'ASC'],
            'contain' => ['Canais', 'Leiloeiras'],
            'limit' => 16
        ];

        $horario = date('Y-m-d H:i:s');

        $this->set('leiloes', $this->paginate($this->Leiloes->find('all', [
            'conditions' => [
                'date >=' => $horario
            ],
        ])));

        $this->set('_serialize', ['leiloes']);
    }

    public function detalhes($id = null) {

        $leilao = $this->Leiloes
        ->findById($id)
        ->contain(['Canais','Leiloeiras'])
        ->firstOrFail();

        $this->set('leilao', $leilao);
        $this->set('_serialize', ['leilao']);
    }

}