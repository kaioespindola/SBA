<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class TagsController extends AppController {

    public $components = array(
        'Search.Prg'
    );

    public function index() {

        $this->paginate = [
            'order' => ['name' => 'ASC']
        ];
        $this->set('tags', $this->paginate($this->Tags->find('all')));
        $this->set('_serialize', ['tags']);
    }

    public function detalhes($id = null) {

        $tag = $this->Tags->get($id, [
            'contain' => ['Noticias']
        ]);
        $this->set('tag', $tag);
        $this->set('_serialize', ['tag']);
    }

    public function adicionar() {

        $tag = $this->Tags->newEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('Tag adicionada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Tag não pode ser salva, tente novamente.'));
            }
        }
        $noticias = $this->Tags->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('tag', 'noticias'));
        $this->set('_serialize', ['tag']);
    }

    public function editar($id = null) {

        $tag = $this->Tags->get($id, [
            'contain' => ['Noticias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('Tag editada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Tag não pode ser editada, tente novamente.'));
            }
        }
        $noticias = $this->Tags->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('tag', 'noticias'));
        $this->set('_serialize', ['tag']);
    }

    public function deletar($id = null) {

        $this->request->allowMethod(['post', 'delete']);
        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success(__('Tag deletada.'));
        } else {
            $this->Flash->error(__('Tag não pode ser deletada, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}