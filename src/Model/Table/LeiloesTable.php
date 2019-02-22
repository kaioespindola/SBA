<?php
namespace App\Model\Table;

use App\Model\Entity\Leiloe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class LeiloesTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);

        $this->getTable('leiloes');
    	$this->getDisplayField('name');
        $this->getPrimaryKey('id');
        
        $this->addBehavior('Search.Search');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');

        $this->searchManager()
            ->value('name')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
            ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['name']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);

        $this->belongsToMany('Leiloeiras', [
            'foreignKey' => 'leilao_id',
            'targetForeignKey' => 'leiloeira_id',
            'joinTable' => 'leiloes_leiloeiras',
        ]);

        $this->belongsTo('Canais', [
            'foreignKey' => 'canal_id',
            'joinType' => 'INNER'
        ]);

    }

    public function validationDefault(Validator $validator) {

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('date', __("Data é obrigatória."));

        return $validator;

    }

}