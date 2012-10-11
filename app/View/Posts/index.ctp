<!-- File: /app/View/Posts/index.ctp -->


<h1>
    Blog posts
</h1>

<?php echo $this->Html->link('Add Post', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

<br /><br />

<?php foreach ($posts as $post): ?>
    <div class="well">
        <h3>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?><small class="pull-right"><?php echo $post['Post']['created']; ?>  Created by: <?php echo $post['Post']['user_id']; ?></small>
        </h3>
        <p>
            <?php echo $post['Post']['body']; ?>
        </p>

        <div class="pull-right">   
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> |
                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?'));
                ?>
        </div>
    </div>
<?php endforeach; ?>



















<!-- <table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>


    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> | 
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            
        </td>
        
    </tr>
    <?php endforeach; ?>

</table> -->

<div class="pagination pagination-centered">
    <ul>
        <li><?php
echo $this->Paginator->prev(' << ' . __('previous'), array(), null, array('class' => 'disabled')); ?></li>
        <li><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></li>
        <li><?php
echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled')); ?></li>
    </ul>
</div>

    