<!-- File: /app/View/Posts/add.ctp -->
<div class="row span12">
	<legend><?php echo __('Add Post'); ?></legend>
	<div class="well">
		<?php
		echo $this->Form->create('Post');
		echo $this->Form->input('title');
		echo $this->Form->input('body', array('rows' => '4'));
		echo $this->Form->end('Save Post');
		?>
	</div>
</div>