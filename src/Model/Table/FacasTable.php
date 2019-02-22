<?php
namespace App\Model\Table;

use App\Model\Entity\Canai;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class FacasTable extends Table {

    public function initialize(array $config) {

    	parent::initialize($config);

		$this->table('facas');
		$this->displayField('name');
 		$this->primaryKey('id');

 		$this->addBehavior('Timestamp');
		
        $this->hasMany('Lances', [
            'foreignKey' => 'faca_id',
            'dependent' => true
        ]);

    }
}