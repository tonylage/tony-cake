<!-- app/View/Users/add.ctp -->
<div class="row span12">
    <legend><?php echo __('Add User'); ?></legend>
    <div class="well">
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('password_confirmation', array('type'=>'password')); ?>
            <?php if ($current_user['role'] == 'admin'): ?>
                <?php echo $this->Form->input('role', array(
                'options' => array('visitor' => 'Visitor','author' => 'Author', 'admin' => 'Admin'))); ?>
            <?php elseif ($current_user['role'] != 'admin'): ?>
                <?php echo $this->Form->input('role', array(
                'options' => array('visitor' => 'Visitor'))); ?>
            <?php endif; ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
    </div>
</div>