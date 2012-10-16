<!-- File: /app/View/Posts/view.ctp -->
<div class="row span12">
	<h2><?php echo h($post['Post']['title']); ?></h2>
	<div class="well">
		<p><small>Created: <?php echo $post['Post']['created']; ?></small>
			<div class="pull-right">  
	        	<?php if ($current_user['id'] == $post['Post']['user_id'] || ($current_user['role'] == 'admin')): ?>    
		    		<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> |
		    			<?php echo $this->Form->postLink(
			            	'Delete',
			            	array('action' => 'delete', $post['Post']['id']),
			            	array('confirm' => 'Are you sure?')); ?>
		    	<?php endif; ?> 
	    	</div>
    	</p>
		<p><?php echo h($post['Post']['body']); ?></p>
		
	</div>
</div>