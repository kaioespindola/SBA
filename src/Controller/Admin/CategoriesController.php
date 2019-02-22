<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class CategoriesController extends AppController {

	public function index() {

        $categoria = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $categoria = $this->Categories->patchEntity($categoria, $this->request->data);
            if ($this->Categories->save($categoria)) {
                $this->Flash->success(__('Categoria adiciona com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta Categoria não pode ser salva, tente novamente.'));
            }
        }

        $parentCategories = $this->Categories->ParentCategories->find('treeList', [
            'limit' => null,
            ]);

        $this->paginate = [
            'order' => ['lft' => 'ASC']
        ];
        $this->set('categorieslist', $this->Categories->find('treeList', [
            'spacer' => '<b style="font-size:20px;"><strong>&rarr;</strong></b>&nbsp;'
            ]));

        $this->set(compact('categorieslist', 'parentCategories'));
        $this->set('_serialize', ['category']);

	}

    public function editar($id = null) {

        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('Categoria editada com suceeso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Esta Categoria não pode ser editada, tente novamente.'));
            }
        }
        $parentCategories = $this->Categories->ParentCategories->find('treeList', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
        $this->set('_serialize', ['category']);
    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('Categoria deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Esta Categoria não pode ser deletada, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }

	/* Ações de movimentação */

    public function moveUp($id = null) {

        $this->request->allowMethod(['post', 'put']);
        $category = $this->Categories->get($id);
        if ($this->Categories->moveUp($category)) {
            $this->Flash->success('Categoria movida para uma possição acima.');
        } else {
            $this->Flash->error('Esta Categoria não pode ser movida para cima, tente novamente.');
        }
        return $this->redirect($this->referer(['action' => 'index']));
    }

    public function moveDown($id = null) {

        $this->request->allowMethod(['post', 'put']);
        $category = $this->Categories->get($id);
        if ($this->Categories->moveDown($category)) {
            $this->Flash->success('Categoria movida para uma possição abaixo.');
        } else {
            $this->Flash->error('TEsta Categoria não pode ser movida para baixo, tente novamente.');
        }
        return $this->redirect($this->referer(['action' => 'index']));
    }

}