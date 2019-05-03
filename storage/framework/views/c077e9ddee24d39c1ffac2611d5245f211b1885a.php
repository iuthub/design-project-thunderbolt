<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('sctcont.index')); ?>" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
    <!--  <img src="<?php echo e('/images/'.$data->image); ?>"> -->
     <!-- <img src="<?php echo e(asset('images/'.$data->image)); ?>"> -->
<!--      <img src="<?php echo e(asset('images/210757719.jpg')); ?>"> -->
  <div class="test">
	<h3>First Name - <?php echo e($data->first_name); ?> </h3>
	<h3>Last Name - <?php echo e($data->last_name); ?></h3>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('screenshots.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/khurshid/Desktop/Laravel-5.8-Crud-Tutorial/resources/views/screenshots/view.blade.php */ ?>