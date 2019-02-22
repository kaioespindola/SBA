<?php
namespace App\Model\Table;

use App\Model\Entity\Configuracoe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ConfiguracoesTable extends Table {

	public function initialize(array $config) {

		parent::initialize($config);

		$this->getTable('configuracoes');
		$this->getDisplayField('name');
		$this->getPrimaryKey('id');
		$this->addBehavior('Timestamp');

	}

}