<div class="posts view">
<h2><?php  echo __('Post');?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($post['Post']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Author'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date Gmt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_date_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Excerpt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_excerpt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['comment_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ping Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['ping_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Password'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Name'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Ping'); ?></dt>
		<dd>
			<?php echo h($post['Post']['to_ping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pinged'); ?></dt>
		<dd>
			<?php echo h($post['Post']['pinged']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Modified Gmt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_modified_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Content Filtered'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_content_filtered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Parent'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guid'); ?></dt>
		<dd>
			<?php echo h($post['Post']['guid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu Order'); ?></dt>
		<dd>
			<?php echo h($post['Post']['menu_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Type'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Mime Type'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_mime_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Count'); ?></dt>
		<dd>
			<?php echo h($post['Post']['comment_count']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postmeta'), array('controller' => 'postmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Postmeta');?></h3>
	<?php if (!empty($post['Postmetum'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Meta Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($post['Postmetum'] as $postmetum): ?>
		<tr>
			<td><?php echo $postmetum['meta_id'];?></td>
			<td><?php echo $postmetum['post_id'];?></td>
			<td><?php echo $postmetum['meta_key'];?></td>
			<td><?php echo $postmetum['meta_value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postmeta', 'action' => 'view', $postmetum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postmeta', 'action' => 'edit', $postmetum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postmeta', 'action' => 'delete', $postmetum['id']), null, __('Are you sure you want to delete # %s?', $postmetum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
