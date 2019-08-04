<h1>CAKE掲示板</h1>
<p>
<?php if ($user) : ?>
	こんにちは<?php echo $user['username']; ?>さん
<?php else: ?>
	こんにちはユーザーさん
<?php endif ?>
</p>
<p><?php echo $this->Html->link("投稿", array('action' => 'add')); ?></p>
<p><?php
if ($user) {
	echo $this->Html->link("ログアウト", array('controller' => 'users', 'action' => 'logout'));
} else {
	echo $this->Html->link("登録  ", array('controller' => 'users', 'action' => 'add'));
	echo $this->Html->link("ログイン", array('controller' => 'users', 'action' => 'login'));
}
?>
<table>
	<tr>
		<th>Id</th>
		<th>投稿者</th>
		<th>タイトル</th>
		<th>Action</th>
		<th>Time</th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $post['User']['username']; ?> </td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'], array ('action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php
			if ($user['id'] === $post['Post']['user_id']) {
				echo $this->Form->postLink('削除　', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?'));
				echo $this->Html->link('編集', array('action' => 'edit', $post['Post']['id']));
			}
			?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
