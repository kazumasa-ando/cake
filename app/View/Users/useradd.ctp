<?php
echo $this->Form->create('User', array('url' => 'useradd'));
echo $this->Form->input('username', array('label' => '名前'));
echo $this->Form->input('mail', array('label' => 'メールアドレス'));
echo $this->Form->input('password', array('label' => 'パスワード'));
echo $this->Form->end('新規登録');
?>
