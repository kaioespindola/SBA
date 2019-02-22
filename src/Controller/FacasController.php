<?php
namespace App\Controller;

use App\Controller\AppController;

class FacasController extends AppController {

    public function initialize() {

        parent::initialize();
        $this->Auth->allow();
    }

    public function index() {

        $this->paginate = [
            'order' => ['lote' => 'ASC'],
            'limit' => 28
        ];

        $this->set('facas', $this->paginate($this->Facas->find('all')));

    }

    public function detalhes($id = null) {

        $this->loadModel('Lances');

        $faca = $this->Facas
        ->findById($id)
        ->contain(['Lances' => [
            'sort' => ['lances.valor' => 'DESC']
        ]])
        ->firstOrFail();

        $this->set('faca', $faca);

    }

    public function add() {

        $this->loadModel('Lances');

        $lance = $this->Lances->newEntity();
        if ($this->request->is('post')) {
            $lance = $this->Lances->patchEntity($lance, $this->request->data);
            $lance->user_id = 1;
            if ($this->Lances->save($lance)) {
                $this->Flash->success(__('Lance adicionado com sucesso.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('Preencha todos os dados corretamente para efetuar o lance, feche esta aba e tente novamente.'));
            }
        }

    }

}