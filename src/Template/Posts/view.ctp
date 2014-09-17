<div class="posts view">
	<h2><?= __('Post') ?></h2>
	<dl>
		<dt><?= __('Id') ?></dt>
		<dd>
			<?= h($post->id) ?>
			&nbsp;
		</dd>
		<dt><?= __('Title') ?></dt>
		<dd>
			<?= h($post->title) ?>
			&nbsp;
		</dd>
		<dt><?= __('Body') ?></dt>
		<dd>
			<?= h($post->body) ?>
			&nbsp;
		</dd>
		<dt><?= __('Created') ?></dt>
		<dd>
			<?= h($post->created) ?>
			&nbsp;
		</dd>
		<dt><?= __('Modified') ?></dt>
		<dd>
			<?= h($post->modified) ?>
			&nbsp;
		</dd>
		<dt><?= __('Status') ?></dt>
		<dd>
			<?= h($post->status) ?>
			&nbsp;
		</dd>
		<dt><?= __('User') ?></dt>
		<dd>
			<?= $post->has('user') ? $this->Html->link($post->user->name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # %s?', $post->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?= __('Related Comments') ?></h3>
	<?php if (!empty($post->comments)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Title') ?></th>
			<th><?= __('Body') ?></th>
			<th><?= __('Created') ?></th>
			<th><?= __('Modified') ?></th>
			<th><?= __('User Id') ?></th>
			<th><?= __('Status') ?></th>
			<th><?= __('Post Id') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($post->comments as $comments): ?>
		<tr>
			<td><?= h($comments->id) ?></td>
			<td><?= h($comments->title) ?></td>
			<td><?= h($comments->body) ?></td>
			<td><?= h($comments->created) ?></td>
			<td><?= h($comments->modified) ?></td>
			<td><?= h($comments->user_id) ?></td>
			<td><?= h($comments->status) ?></td>
			<td><?= h($comments->post_id) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # %s?', $comments->id)]) ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
		</ul>
	</div>
</div>
