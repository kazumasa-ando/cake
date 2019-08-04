<?php
class Post extends AppModel{
	public $belongsTo = "User";
	public $validate = array(
		'title' => array(
			'rule' => 'notBlank',
			'message' => '空です'
		),
		'body' => array(
			'rule' => 'notBlank',
			'message' => '空です'
		)
	);
	public function isOwnedBy($post, $user) {
		return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}

}
?>
