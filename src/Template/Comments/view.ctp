<div class="comments view">
	<h2><?= __('Comment') ?></h2>
	<dl>
		<dt><?= __('Id') ?></dt>
		<dd>
			<?= h($comment->id) ?>
			&nbsp;
		</dd>
		<dt><?= __('Title') ?></dt>
		<dd>
			<?= h($comment->title) ?>
			&nbsp;
		</dd>
		<dt><?= __('Body') ?></dt>
		<dd>
			<?= h($comment->body) ?>
			&nbsp;
		</dd>
		<dt><?= __('Created') ?></dt>
		<dd>
			<?= h($comment->created) ?>
			&nbsp;
		</dd>
		<dt><?= __('Modified') ?></dt>
		<dd>
			<?= h($comment->modified) ?>
			&nbsp;
		</dd>
		<dt><?= __('User') ?></dt>
		<dd>
			<?= $comment->has('user') ? $this->Html->link($comment->user->name, ['controller' => 'Users', 'action' => 'view', $comment->user->id]) : '' ?>
			&nbsp;
		</dd>
		<dt><?= __('Status') ?></dt>
		<dd>
			<?= h($comment->status) ?>
			&nbsp;
		</dd>
		<dt><?= __('Post') ?></dt>
		<dd>
			<?= $comment->has('post') ? $this->Html->link($comment->post->title, ['controller' => 'Posts', 'action' => 'view', $comment->post->id]) : '' ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # %s?', $comment->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
	</ul>
</div>
