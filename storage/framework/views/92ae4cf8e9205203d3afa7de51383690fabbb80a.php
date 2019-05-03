<?php $__env->startSection('main'); ?>

<ul style="list-style: none;">
	<a href="<?php echo e(url('mcont')); ?>">
		<li>Menu</li>
	</a>
	<a href="<?php echo e(url('fcont')); ?>">
		<li>Features</li>
	</a>
	<a href="<?php echo e(url('feedcont')); ?>">
		<li>Feedbacks</li>
	</a>
	<a href="<?php echo e(url('sctcont')); ?>">
		<li>Screenshots</li>
	</a>
	<a href="#">
		<li>Menu5</li>
	</a>
	<a href="#">
		<li>Menu6</li>
	</a>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminmenu.menu_p', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/khurshid/Desktop/Laravel-5.8-Crud-Tutorial/resources/views/adminmenu/menu.blade.php */ ?>