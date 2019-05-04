<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('mcont.index')); ?>" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($menu->image); ?>" class="img-thumbnail" />

  <div class="test">
	<h3>First Name - <?php echo e($menu->first_name); ?> </h3>
	<h3>Last Name - <?php echo e($menu->last_name); ?></h3>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('menus.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Said\Desktop\design-project-thunderbolt\resources\views/menus/view.blade.php */ ?>