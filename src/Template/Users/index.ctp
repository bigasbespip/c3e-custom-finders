<div class="users index">
	<h2><?= __('Users') ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id') ?></th>
		<th><?= $this->Paginator->sort('name') ?></th>
		<th><?= $this->Paginator->sort('created') ?></th>
		<th><?= $this->Paginator->sort('modified') ?></th>
		<th><?= $this->Paginator->sort('status') ?></th>
		<th class="actions"><?= __('Actions') ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?= h($user->id) ?>&nbsp;</td>
		<td><?= h($user->name) ?>&nbsp;</td>
		<td><?= h($user->created) ?>&nbsp;</td>
		<td><?= h($user->modified) ?>&nbsp;</td>
		<td><?= h($user->status) ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
		<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
	</ul>
</div>
