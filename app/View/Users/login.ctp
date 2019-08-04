<?php
echo $this->Session->flash('auth');
echo $this->Form->create('User', array('url' => 'login'));
echo $this->Form->input('email', array('label' => 'メールアドレス'));
echo $this->Form->input('password', array('label' => 'パスワード'));
echo $this->Form->end('ログイン');
?>
