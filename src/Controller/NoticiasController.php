<?php
namespace App\Controller;

use App\Controller\AppController;

class NoticiasController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['pesquisa']
        ]);

    }

    public function pesquisa() {

        $query = $this->Noticias
            ->find('search', ['search' => $this->request->getQueryParams()])
            ->contain(['Categories'])
            ->order(['date' => 'DESC'])
            ->where(['name IS NOT' => null]);

        $this->set('noticias', $this->paginate($query));
    }

	public function index() {

        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find()->first()->toArray();
        $this->set(compact('configuracoes'));

        $horario = date('Y-m-d H:i:s');

        $this->paginate = [
            'order' => ['date' => 'DESC'],
            'contain' => ['Categories'],
            'limit' => 13,
            'conditions' => [
                'date <=' => $horario,
                'privacidade' => 1
                ]
        ];

        $this->set('noticias', $this->paginate($this->Noticias->find('all')));

	}

    public function ver($slug = null) {

        $horario = date('Y-m-d H:i:s');

        $noticia = $this->Noticias
        ->findBySlug($slug)
        ->contain(['Categories','Tags','Users'])
        ->firstOrFail();

        $this->set('noticia', $noticia);

        $this->set('ultimas_noticias', $this->Noticias->find('all', [
            'order' => ['date' => 'DESC'],
            'limit' => 5,
            'fields' => ['id','name','slug','thumbnail','date','chapeu'],
            'conditions' => [
                'date <=' => $horario,
                'privacidade' => 1
            ]
        ]));

        $this->set('_serialize', ['noticia','ultimas_noticias']);

    }

}