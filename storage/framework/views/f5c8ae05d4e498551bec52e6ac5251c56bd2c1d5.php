<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('fcont.index')); ?>" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" />
    <!--  <img src="<?php echo e('/images/'.$data->image); ?>"> -->
     <!-- <img src="<?php echo e(asset('images/'.$data->image)); ?>"> -->
<!--      <img src="<?php echo e(asset('images/210757719.jpg')); ?>"> -->
  <div class="test">
	<h3>Title - <?php echo e($data->first_name); ?> </h3>
	<h3>Body - <?php echo e($data->last_name); ?></h3>

	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('features.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/khurshid/Desktop/design-project-thunderbolt/resources/views/features/view.blade.php */ ?>