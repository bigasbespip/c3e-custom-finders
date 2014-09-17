<div class="comments index">
	<h2><?= __('Comments') ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id') ?></th>
		<th><?= $this->Paginator->sort('title') ?></th>
		<th><?= $this->Paginator->sort('body') ?></th>
		<th><?= $this->Paginator->sort('created') ?></th>
		<th><?= $this->Paginator->sort('modified') ?></th>
		<th><?= $this->Paginator->sort('user_id') ?></th>
		<th><?= $this->Paginator->sort('status') ?></th>
		<th><?= $this->Paginator->sort('post_id') ?></th>
		<th class="actions"><?= __('Actions') ?></th>
	</tr>
	<?php foreach ($comments as $comment): ?>
	<tr>
		<td><?= h($comment->id) ?>&nbsp;</td>
		<td><?= h($comment->title) ?>&nbsp;</td>
		<td><?= h($comment->body) ?>&nbsp;</td>
		<td><?= h($comment->created) ?>&nbsp;</td>
		<td><?= h($comment->modified) ?>&nbsp;</td>
		<td>
			<?= $comment->has('user') ? $this->Html->link($comment->user->name, ['controller' => 'Users', 'action' => 'view', $comment->user->id]) : '' ?>
		</td>
		<td><?= h($comment->status) ?>&nbsp;</td>
		<td>
			<?= $comment->has('post') ? $this->Html->link($comment->post->title, ['controller' => 'Posts', 'action' => 'view', $comment->post->id]) : '' ?>
		</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $comment->id]) ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->id]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p><?= $this->Paginator->counter() ?></p>
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__('next') . ' >');
	?>
	</ul>
</div>
<div class="actions">
	<h3><?= __('Actions') ?></h3>
	<ul>
		<li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
	</ul>
</div>
