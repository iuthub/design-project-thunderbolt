<?php $__env->startSection('main'); ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>
<div align="right">
	<a href="<?php echo e(route('fcont.index')); ?>" class="btn btn-default">Back</a>
</div>

<form method="post" action="<?php echo e(route('fcont.store')); ?>" enctype="multipart/form-data">

	<?php echo csrf_field(); ?>
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Title</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Body</label>
		<div class="col-md-8">
			<input type="text" name="last_name" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('features.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/khurshid/Desktop/design-project-thunderbolt/resources/views/features/create.blade.php */ ?>