<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<fieldset>
	<legend><?php echo __('入力してください'); ?></legend>
	<?php
	echo $this->Form->input('name');
	echo $this->Form->input('pass');
	?>
</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
