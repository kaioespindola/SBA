<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class CanaisController extends AppController {

	public function index() {

        $this->paginate = [
            'order' => ['id' => 'ASC'],
        ];

        $this->set('canais', $this->paginate($this->Canais));
        $this->set('_serialize', ['canais']);
	}

    public function editar($id = null) {

        $canal = $this->Canais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $canal = $this->Canais->patchEntity($canal, $this->request->data);
            if ($this->Canais->save($canal)) {
                $this->Flash->success(__('Este canal foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição do canal não pode ser concluida, tente novamente.'));
            }
        }
        $this->set(compact('canal'));
        $this->set('_serialize', ['canal']);

    }


}