<?php
namespace App\Model\Table;

use App\Model\Entity\Canai;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CanaisTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);

        $this->getTable('canais');
		$this->getDisplayField('name');
        $this->getPrimaryKey('id');
        
        $this->hasMany('Programas', [
            'foreignKey' => 'canal_id'
        ]);

        $this->hasMany('Programacao', [
            'foreignKey' => 'canal_id'
        ]);

    }

    public function validationDefault(Validator $validator) {

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        return $validator;
    }

}