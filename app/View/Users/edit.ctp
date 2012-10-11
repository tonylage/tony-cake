<h2>Edit User</h2>
<div class="well">
	<?php
    echo $this->Form->create('User', array('action' => 'edit'));
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author')));
    echo $this->Form->end('Save User'); ?>
</div>
