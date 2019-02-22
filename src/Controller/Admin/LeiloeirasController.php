<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class LeiloeirasController extends AppController {


    public function index() {

        $this->paginate = [
            'order' => ['name' => 'ASC']
        ];
        $this->set('leiloeiras', $this->paginate($this->Leiloeiras->find('all')));
        $this->set('_serialize', ['leiloeiras']);

    }

    public function adicionar() {

        $leiloeira = $this->Leiloeiras->newEntity();
        if ($this->request->is('post')) {
            $leiloeira = $this->Leiloeiras->patchEntity($leiloeira, $this->request->data);
            if ($this->Leiloeiras->save($leiloeira)) {
                $this->Flash->success(__('Leiloeira foi adicionada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta leiloeira não pode ser adicionada, tente novamente.'));
            }
        }
        $this->set(compact('leiloeira'));
        $this->set('_serialize', ['leiloeira']);
    }

    public function editar($id = null) {

        $leiloeira = $this->Leiloeiras->get($id, [
            'contain' => ['Leiloes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leiloeira = $this->Leiloeiras->patchEntity($leiloeira, $this->request->data);
            if ($this->Leiloeiras->save($leiloeira)) {
                $this->Flash->success(__('Esta leiloeira foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição da leiloeira não pode ser concluida, tente novamente.'));
            }
        }
        $this->set(compact('leiloeira'));
        $this->set('_serialize', ['leiloeira']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $leiloeira = $this->Leiloeiras->get($id);
        if ($this->Leiloeiras->delete($leiloeira)) {
            $this->Flash->success(__('Leiloeira deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Esta Leiloeira não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}