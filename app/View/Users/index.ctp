<!-- File: /app/View/Posts/index.ctp -->


<h1>Users</h1>
<?php echo $this->Html->link('Add User', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
<br />
<br />
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $user['User']['username']; ?>
        </td>
        <td>
            <?php echo $user['User']['role']; ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?> | 
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            
        </td>
        
    </tr>
    <?php endforeach; ?>

</table>

<div class="pagination pagination-centered">
    <ul>
        <li><?php
echo $this->Paginator->prev(' << ' . __('previous'), array(), null, array('class' => 'disabled')); ?></li>
        <li><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></li>
        <li><?php
echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled')); ?></li>
    </ul>
</div>

    