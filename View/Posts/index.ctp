<div class="posts index">
	<h2><?php echo __('Posts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID');?></th>
			<th><?php echo $this->Paginator->sort('post_author');?></th>
			<th><?php echo $this->Paginator->sort('post_date');?></th>
			<th><?php echo $this->Paginator->sort('post_date_gmt');?></th>
			<th><?php echo $this->Paginator->sort('post_content');?></th>
			<th><?php echo $this->Paginator->sort('post_title');?></th>
			<th><?php echo $this->Paginator->sort('post_excerpt');?></th>
			<th><?php echo $this->Paginator->sort('post_status');?></th>
			<th><?php echo $this->Paginator->sort('comment_status');?></th>
			<th><?php echo $this->Paginator->sort('ping_status');?></th>
			<th><?php echo $this->Paginator->sort('post_password');?></th>
			<th><?php echo $this->Paginator->sort('post_name');?></th>
			<th><?php echo $this->Paginator->sort('to_ping');?></th>
			<th><?php echo $this->Paginator->sort('pinged');?></th>
			<th><?php echo $this->Paginator->sort('post_modified');?></th>
			<th><?php echo $this->Paginator->sort('post_modified_gmt');?></th>
			<th><?php echo $this->Paginator->sort('post_content_filtered');?></th>
			<th><?php echo $this->Paginator->sort('post_parent');?></th>
			<th><?php echo $this->Paginator->sort('guid');?></th>
			<th><?php echo $this->Paginator->sort('menu_order');?></th>
			<th><?php echo $this->Paginator->sort('post_type');?></th>
			<th><?php echo $this->Paginator->sort('post_mime_type');?></th>
			<th><?php echo $this->Paginator->sort('comment_count');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['ID']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_author']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_date']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_date_gmt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_content']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_title']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_excerpt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['comment_status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['ping_status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_password']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_name']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['to_ping']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['pinged']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_modified']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_modified_gmt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_content_filtered']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_parent']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['guid']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['menu_order']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_type']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_mime_type']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['comment_count']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Postmeta'), array('controller' => 'postmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
