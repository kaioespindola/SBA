<?php
namespace App\Model\Table;

use App\Model\Entity\Programa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProgramasTable extends Table {

    public function initialize(array $config) {

    	parent::initialize($config);

    	$this->getTable('programas');
    	$this->getDisplayField('name');
    	$this->getPrimaryKey('id');

    	$this->addBehavior('Timestamp');
    	$this->addBehavior('Sluggable');

        $horario = date('Y-m-d H:i:s');

        $this->belongsToMany('Noticias', [
            'foreignKey' => 'programa_id',
            'targetForeignKey' => 'noticia_id',
            'joinTable' => 'noticias_programas',
            'sort' => ['Noticias.date' => 'DESC'],
            'conditions' => [
                'date <=' => $horario,
                'privacidade' => 1,
                ]
        ]);

        $this->belongsToMany('Videos', [
            'foreignKey' => 'programa_id',
            'targetForeignKey' => 'video_id',
            'joinTable' => 'videos_programas',
            'sort' => ['Videos.date' => 'DESC'],
            'conditions' => [
                'date <=' => $horario,
                'privacidade' => 1,
                ]
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

        return $validator;

    }
}