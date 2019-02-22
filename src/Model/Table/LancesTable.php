<?php
namespace App\Model\Table;

use App\Model\Entity\Canai;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class LancesTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);
        
		$this->table('lances');
		$this->displayField('valor');
 		$this->primaryKey('id');

 		$this->addBehavior('Timestamp');
		$this->addBehavior('Sluggable');

        $this->belongsTo('Facas', [
            'foreignKey' => 'faca_id',
            'joinType' => 'INNER'
        ]);
	
    }

    public function validationDefault(Validator $validator) {
        
        $validator
            ->requirePresence('comprador', 'comprador')
            ->notEmpty('comprador');

        return $validator;
    }
}