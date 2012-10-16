<!-- File: /app/View/Posts/edit.ctp -->
<div class="row span12">
	<legend><?php echo __('Edit Post'); ?></legend>
	<div class="well">
		<?php
	    echo $this->Form->create('Post', array('action' => 'edit'));
	    echo $this->Form->input('title');
	    echo $this->Form->input('body', array('rows' => '3'));
	    echo $this->Form->input('id', array('type' => 'hidden'));
	    echo $this->Form->end('Save Post'); ?>
</div>
