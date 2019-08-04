<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
	public function beforesave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
	public $validate = array(
		'username' => array(
			'length' => array(
				'rule' => array('minLength', 3),
				'message' => '3文字以上入力してください',
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'すでに使われています',
			),
		),
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'message' => '不適切なメールです',
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'すでに使われています',
			),
		),
		'password' => array(
			'empty' => array(
				'rule' => 'notBlank',
				'message' => 'から入力です',
			),
		)
	);
}
?>
