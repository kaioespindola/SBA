<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class ConfiguracoesController extends AppController {

    public function geral() {

    	$id = 1;

        $configuracao = $this->Configuracoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $configuracao = $this->Configuracoes->patchEntity($configuracao, $this->request->data);
            if ($this->Configuracoes->save($configuracao)) {
                $this->Flash->success(__('Configurações do site editadas com sucesso.'));
                return $this->redirect(['action' => 'geral']);
            } else {
                $this->Flash->error(__('Não foi possivel editar os dados do site, tente novamente.'));
            }
        }
        $this->set(compact('configuracao'));
        $this->set('_serialize', ['configuracao']);

    }

    public function midia() {
        
    }

}