<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class User extends Entity {

	protected function _setPassword($value) {

		$hasher = new DefaultPasswordHasher();
		return $hasher->hash($value);
	}

    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
