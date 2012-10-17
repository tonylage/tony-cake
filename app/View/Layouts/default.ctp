<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header>
			<div class="navbar navbar-fixed-top">
    			<div class="navbar-inner">
    				<div class="pull-right">
						<?php if ($logged_in): ?>
		            Welcome <?php echo $current_user['name']; ?>.  <?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
		        <?php else: ?>
		            <?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>  
		        <?php endif; ?>
					</div>
				<a class="brand" href="/pages/home/">Tony-Cake</a>
				<ul class="nav">
					<li>
						<?php echo $this->Html->link('Blog', array('controller'=>'posts', 'action'=>'index')); ?>
					</li>
					<?php if ($logged_in): ?>
						<li>
							<?php echo $this->Html->link('My Profile', array('controller'=>'users','action' => 'view', $current_user['id'])); ?>
						</li>
					<?php endif; ?>
					<?php if ($current_user['role'] == 'admin'): ?>
					<li>
						<?php echo $this->Html->link('User Admin', array('controller'=>'users', 'action'=>'index')); ?>
					</li>
					<?php endif; ?>
					
				</ul>
    			</div>
    		</div>
			
		</header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer" class="row span12">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<!-- <?php echo $this->element('sql_dump'); ?> -->
</body>
</html>
