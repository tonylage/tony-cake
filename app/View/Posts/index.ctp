<!-- File: /app/View/Posts/index.ctp -->

<div class="row span12">
    <legend><?php echo __('Blog Posts'); ?>    
        <span class="pull-right">
            <?php if ($current_user['role'] == 'admin' || $current_user['role'] == 'author'): ?>
                <?php echo $this->Html->link('Add Post', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
            <?php endif; ?>
        </span>
    </legend>
        <?php foreach ($posts as $post): ?>
    <div class="well well-large">
        <h3>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?><small class="pull-right"><?php echo $post['Post']['created']; ?>  Created by: <?php echo $post['Post']['username']; ?></small>
        </h3>
        <p>
            <?php echo $post['Post']['body']; ?>
        </p>
    </div>
    <?php endforeach; ?>
    <div class="pagination pagination-centered">
        <ul>
            <li><?php
    echo $this->Paginator->prev(' << ' . __('previous'), array(), null, array('class' => 'disabled')); ?></li>
            <li><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></li>
            <li><?php
    echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled')); ?></li>
        </ul>
    </div>
</div>

    