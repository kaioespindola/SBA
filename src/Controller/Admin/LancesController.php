<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class LancesController extends AppController {

    public function initialize() {

        parent::initialize();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['pesquisar']
        ]);

    }

    public function pesquisar() {

        $query = $this->Lances

            ->find('search', ['search' => $this->request->getQueryParams()])
            ->order(['id' => 'DESC'])
            ->where(['name IS NOT' => null]);

        $this->set('lances', $this->paginate($query));

    }

    public function index() {

        $this->paginate = [
            'order' => ['lances' => 'created'],
            'contain' => ['Facas'],
        ];
        $this->set('lances', $this->paginate($this->Lances->find('all')));
        $this->set('_serialize', ['lances']);

    }

}