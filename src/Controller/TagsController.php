<?php
namespace App\Controller;

use App\Controller\AppController;

class TagsController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();

    }

    public function index($slug = null) {

        $this->loadModel('Noticias');

        $horario = date('Y-m-d H:i:s');

        $tag = $this->Tags
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
        ->contain(['Tags'])
        ->matching('Tags', function ($q) use ($slug) {
            return $q->where(['Tags.name' => $slug]);
        }));

        $this->set('tag', $tag);

        $this->set('noticias', $noticias);


    }

}