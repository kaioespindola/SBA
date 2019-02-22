<?php
namespace App\Model\Table;

use App\Model\Entity\Category;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriesTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);

        $this->setTable('categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentCategories', [
            'className' => 'Categories',
            'foreignKey' => 'parent_id'
        ]);

        $this->hasMany('ChildCategories', [
            'className' => 'Categories',
            'foreignKey' => 'parent_id'
        ]);

        $this->belongsToMany('Noticias', [
            'foreignKey' => 'category_id',
            'targetForeignKey' => 'noticia_id',
            'joinTable' => 'noticias_categories',
        ]);

    }

    public function buildRules(RulesChecker $rules) {
        
        $rules->add($rules->existsIn(['parent_id'], 'ParentCategories'));
        return $rules;
    }

}