<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {

	public function initialize(array $config) {

		parent::initialize($config);

		$this->getTable('users');
		$this->getDisplayField('name');
		$this->getPrimaryKey('id');
        
		$this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->hasMany('Noticias', [
            'foreignKey' => 'user_id',
            'dependent' => true
        ]);

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'dependent' => true
        ]);

	}

    public function validationDefault(Validator $validator) {

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('username', __("Username é obrigatório."))
            ->add('username', [
                'unique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => __("Já existe outro usuário com este nome.")
                ],
                'minLength' => [
                    'rule' => ['minLength', 2],
                    'message' => __("Por Favor, o nome do usuário deve possuir no minímo {0} caracteres", 3)
                ]
            ]);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        return $validator;
    }

}