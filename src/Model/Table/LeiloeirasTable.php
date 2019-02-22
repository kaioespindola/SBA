<?php
namespace App\Model\Table;

use App\Model\Entity\Leiloeira;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class LeiloeirasTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);

        $this->getTable('leiloeiras');
    	$this->getDisplayField('name');
        $this->getPrimaryKey('id');
        
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->belongsToMany('Leiloes', [
            'foreignKey' => 'leiloeira_id',
            'targetForeignKey' => 'leilao_id',
            'joinTable' => 'leiloes_leiloeiras',
        ]);

    }

    public function validationDefault(Validator $validator) {

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('name', __("Nome é obrigatório."))
            ->add('name', [
                'unique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => __("Já existe outra leiloeira com este nome.")
                ],
                'minLength' => [
                    'rule' => ['minLength', 2],
                    'message' => __("Por Favor, o nome da leiloeira deve possuir no minímo {0} caracteres", 2)
                ]
            ]);

        return $validator;

    }

}