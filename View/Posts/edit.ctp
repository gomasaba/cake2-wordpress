<div class="posts form">
<?php echo $this->Form->create('Post');?>
	<fieldset>
		<legend><?php echo __('Edit Post'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('post_author');
		echo $this->Form->input('post_date');
		echo $this->Form->input('post_date_gmt');
		echo $this->Form->input('post_content');
		echo $this->Form->input('post_title');
		echo $this->Form->input('post_excerpt');
		echo $this->Form->input('post_status');
		echo $this->Form->input('comment_status');
		echo $this->Form->input('ping_status');
		echo $this->Form->input('post_password');
		echo $this->Form->input('post_name');
		echo $this->Form->input('to_ping');
		echo $this->Form->input('pinged');
		echo $this->Form->input('post_modified');
		echo $this->Form->input('post_modified_gmt');
		echo $this->Form->input('post_content_filtered');
		echo $this->Form->input('post_parent');
		echo $this->Form->input('guid');
		echo $this->Form->input('menu_order');
		echo $this->Form->input('post_type');
		echo $this->Form->input('post_mime_type');
		echo $this->Form->input('comment_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Post.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Postmeta'), array('controller' => 'postmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
