<?php
namespace App\Model\Table;

use App\Model\Entity\Noticia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class NoticiasTable extends Table {

    public function initialize(array $config) {

        parent::initialize($config);

        $this->getTable('noticias');
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
                'field' => ['name', 'text']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);
         
         $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'dependent' => true
        ]);

        $this->belongsToMany('Noticias', [
            'foreignKey' => 'tag_id',
            'targetForeignKey' => 'noticia_id',
            'joinTable' => 'noticias_tags',
        ]);

        $this->belongsToMany('Categories', [
            'foreignKey' => 'noticia_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'noticias_categories',
        ]);

        $this->belongsToMany('Programas', [
            'foreignKey' => 'noticia_id',
            'targetForeignKey' => 'programa_id',
            'joinTable' => 'noticias_programas',
        ]);

        $this->belongsToMany('Tags', [
            'foreignKey' => 'noticia_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'noticias_tags',
        ]);

    }

    public function validationDefault(Validator $validator) {

        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('date', __("Data é obrigatória."));

        $validator
            ->notEmpty('thumbnail', __("Thumbnail é obrigatória."))
            ->add('thumbnail', [
                'minLength' => [
                    'rule' => ['minLength', 5],
                    'message' => __("Por Favor, a thumbnail da notícia deve possuir no minímo {0} caracteres", 5)
                ]
            ]);

        return $validator;

    }

}