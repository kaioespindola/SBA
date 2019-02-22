<?php
namespace App\Model\Table;

use App\Model\Entity\Role;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class RolesTable extends Table {

	public function initialize(array $config) {

		parent::initialize($config);

		$this->getTable('roles');
		$this->getDisplayField('name');
        $this->getPrimaryKey('id');
        
        $this->addBehavior('Sluggable');

        $this->hasMany('Users', [
            'foreignKey' => 'role_id',
            'dependent' => true
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
                    'message' => __("Já existe outro cargo com este nome.")
                ],
                'minLength' => [
                    'rule' => ['minLength', 2],
                    'message' => __("Por Favor, o nome do cargo deve possuir no minímo {0} caracteres", 3)
                ]
            ]);

        $validator
            ->notEmpty('slug', __("Slug é obrigatório."))
            ->add('slug', [
                'unique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => __("Já existe outro cargo com este slug.")
                ],
                'minLength' => [
                    'rule' => ['minLength', 2],
                    'message' => __("Por Favor, o slug do cargo deve possuir no minímo {0} caracteres", 3)
                ]
            ]);

        return $validator;
    }

}