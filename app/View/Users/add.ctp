<?php
echo $this->Form->create('User', array('url' => 'add'));
echo $this->Form->input('username', array('label' => '名前*3文字以上'));
echo $this->Form->input('email', array('label' => 'メール'));
echo $this->Form->input('password', array('label' => 'パスワード'));
echo $this->Form->end('登録');
?>
