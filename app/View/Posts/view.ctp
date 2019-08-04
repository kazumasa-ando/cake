<p><?php echo $post['User']['username']; ?>さん</p>
<h1><?php echo h($post['Post']['title']); ?></h1>
<p><small>Create: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>
