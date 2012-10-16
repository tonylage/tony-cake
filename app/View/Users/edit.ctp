<div class="row span12">
    <legend><?php echo __('Edit User'); ?></legend>
    <div class="well">
    	<?php
        echo $this->Form->create('User', array('action' => 'edit'));
        echo $this->Form->input('name');
    	echo $this->Form->input('username');
    	echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('password_confirmation', array('type'=>'password')); ?>
        <?php if ($current_user['role'] == 'admin'): ?>
            <?php echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author'))); ?>
        <?php endif; ?>
        <?php echo $this->Form->end('Save User'); ?>
    </div>
</div>

