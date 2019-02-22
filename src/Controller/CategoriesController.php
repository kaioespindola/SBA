<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();

    }

    public function index($slug = null) {

        $this->loadModel('Noticias');

        $horario = date('Y-m-d H:i:s');

        $categoria = $this->Categories
        ->findBySlug($slug)
        ->firstOrFail();

        $this->paginate = [
            'order' => ['date' => 'DESC'],
            'limit' => 10,
            'conditions' => [
                'date <=' => $horario,
                'privacidade' => 1
                ]
        ];

        $noticias = $this->paginate($this->Noticias
        ->find('all')
        ->contain(['Categories'])
        ->matching('Categories', function ($q) use ($slug) {
            return $q->where(['Categories.name' => $slug]);
        }));

        $this->set('categoria', $categoria);

        $this->set('noticias', $noticias);


    }

}