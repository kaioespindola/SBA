<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class ProgramacaoController extends AppController {

    public function initialize() {

        parent::initialize();

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['pesquisar']
        ]);

    }

    public function index() {

        $this->loadModel('Canais');

        $this->set('canais', $this->Canais->find('all'));

        $this->set('semanacb', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 1,
            ],
        ]));

        $this->set('sabadocb', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 1,
            ],
        ]));

        $this->set('domingocb', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 1,
            ],
        ]));

        $this->set('semanaac', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 2,
            ],
        ]));

        $this->set('sabadoac', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 2,
            ],
        ]));

        $this->set('domingoac', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 2,
            ],
        ]));

        $this->set('semanacx', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 3,
            ],
        ]));

        $this->set('sabadocx', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 3,
            ],
        ]));

        $this->set('domingocx', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 3,
            ],
        ])); 

        $this->set('semananc', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 4,
            ],
        ]));

        $this->set('sabadonc', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 4,
            ],
        ]));

        $this->set('domingonc', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 4,
            ],
        ]));

        $this->set('semanacm', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'semana',
                'canal_id' => 5,
            ],
        ]));

        $this->set('sabadocm', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'sabado',
                'canal_id' => 5,
            ],
        ]));

        $this->set('domingocm', $this->Programacao->find('all', [
            'order' => ['time' => 'ASC'],
            'contain' => ['Canais'],
            'conditions' => [
                'dia =' => 'domingo',
                'canal_id' => 5,
            ],
        ]));

        $this->set('_serialize', ['semanacb','sabadocb','domingocb','semanaac','sabadoac','domingoac','semanacx','sabadocx','domingocx','semananc','sabadonc','domingonc','semanacm','sabadocm','domingocm']);

    }

    public function adicionar() {

        $programacao = $this->Programacao->newEntity();
        if ($this->request->is('post')) {
            $programacao = $this->Programacao->patchEntity($programacao, $this->request->data);
            if ($this->Programacao->save($programacao)) {
                $this->Flash->success(__('O horário foi adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este horário não pode ser adicionada, tente novamente.'));
            }
        }
        $canals = $this->Programacao->Canais->find('list', ['limit' => 200]);
        $this->set(compact('programacao','canals'));
        $this->set('_serialize', ['programacao']);

    }

    public function editar($id = null) {

        $programacao = $this->Programacao->get($id, [
            'contain' => ['Canais','Programas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programacao = $this->Programacao->patchEntity($programacao, $this->request->data);
            if ($this->Programacao->save($programacao)) {
                $this->Flash->success(__('Este leilão foi editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A edição do leilão não pode ser concluida, tente novamente.'));
            }
        }
        $programas = $this->Programacao->Programas->find('list', ['limit' => 200]);
        $canals = $this->Programacao->Canais->find('list', ['limit' => 200]);
        $this->set(compact('programacao','canals','programas'));
        $this->set('_serialize', ['programacao','canais','programas']);

    }

    public function deletar($id = null) {
        
        $this->request->allowMethod(['post', 'delete']);
        $programacao = $this->Programacao->get($id);
        if ($this->Programacao->delete($programacao)) {
            $this->Flash->success(__('Horário deleato com sucesso.'));
        } else {
            $this->Flash->error(__('Este horário não pode ser deletada.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}