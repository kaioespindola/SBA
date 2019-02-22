<?php
namespace App\Model\Table;

use App\Model\Entity\Pagina;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PaginasTable extends Table {

	public function initialize(array $config) {

		parent::initialize($config);

        $this->table('paginas');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
        $this->addBehavior('Tree');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'dependent' => true
        ]);

        $this->belongsTo('ParentCategories', [
            'className' => 'Paginas',
            'foreignKey' => 'parent_id'
        ]);

        $this->hasMany('ChildCategories', [
            'className' => 'Paginas',
            'foreignKey' => 'parent_id'
        ]);

	}

    public function buildRules(RulesChecker $rules) {
        
        $rules->add($rules->existsIn(['parent_id'], 'ParentCategories'));
        return $rules;
    }

}