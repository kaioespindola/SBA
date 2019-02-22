<?php
namespace App\Model\Table;

use App\Model\Entity\Programacao;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProgramacaoTable extends Table {

    public function initialize(array $config) {

    	parent::initialize($config);

    	$this->getTable('programacao');
    	$this->getDisplayField('name');
    	$this->getPrimaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Canais', [
            'foreignKey' => 'canal_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Programas', [
            'foreignKey' => 'canal_id',
            'joinType' => 'INNER'
        ]);

    }

    public function validationDefault(Validator $validator) {

        return $validator;

    }

}