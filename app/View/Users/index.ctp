<!-- File: /app/View/Posts/index.ctp -->
<div class="row span12">
    <legend>
        <?php echo __('Users'); ?><span class="pull-right">
        <?php if ($current_user['role'] == 'admin'): ?>
            <?php echo $this->Html->link('Add User', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
        <?php endif; ?>
    </span></legend>
    <div class="well">
        
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $user['User']['name']; ?>
                </td>
                <td>
                    <?php echo $user['User']['username']; ?>
                </td>
                
                <td>
                    <?php if ($current_user['role'] == 'admin'): ?>
                        <?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?> | 
                        <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?> | 
                        <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
                    <?php elseif ($current_user['id'] == $user['User']['id']): ?>
                        <?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?> | 
                        <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</div>
    <div class="pagination pagination-centered">
        <ul>
            <li><?php echo $this->Paginator->prev(' << ' . __('previous'),
            array(),
            null, 
            array('class' => 'disabled')); ?></li>
            <li><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></li>
            <li><?php echo $this->Paginator->next(__('next') . ' >>', 
            array(), 
            null, 
            array('class' => 'disabled')); ?></li>
        </ul>
    </div>

    