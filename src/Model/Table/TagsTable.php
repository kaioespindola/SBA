<?php
namespace App\Model\Table;

use App\Model\Entity\Tag;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TagsTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);

		$this->getTable('tags');
		$this->getDisplayField('name');
        $this->getPrimaryKey('id');
        
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

    }

}