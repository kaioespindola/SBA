<?php
namespace App\Controller;

use App\Controller\AppController;

class ProgramasController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();
    }

    public function index() {

        $this->paginate = [
            'order' => ['name' => 'ASC']
        ];

        $this->set('programas', $this->paginate($this->Programas->find('all', [
            'conditions' => [
                'privacidade' => 1
                ],
        ])));

        $this->set('_serialize', ['programas']);
        
    }

    public function detalhes($slug = null) {

        $this->loadModel('Noticias');

        $horario = date('Y-m-d H:i:s');

        $programa = $this->Programas
        ->findBySlug($slug)
        ->firstOrFail();

        $this->paginate = [
            'order' => ['date' => 'DESC'],
            'limit' => 8,
            'conditions' => [
                'date <=' => $horario
                ]
        ];

        $noticias = $this->paginate($this->Noticias
        ->find('all')
        ->contain(['Programas'])
        ->matching('Programas', function ($q) use ($slug) {
            return $q->where(['Programas.slug' => $slug]);
        }));

        $this->set('programa', $programa);

        $this->set('noticias', $noticias);

    }
    
}