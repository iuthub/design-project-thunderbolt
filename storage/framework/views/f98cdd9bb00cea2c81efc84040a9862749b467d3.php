<?php $__env->startSection('main'); ?>

<div align="right">
	<a href="<?php echo e(route('fcont.create')); ?>" class="btn btn-success btn-sm">Add</a>
</div>
<br />
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
	<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="35%">Title</th>
		<th width="35%">Body</th>
		<th width="30%">Action</th>
	</tr>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" class="img-thumbnail" width="75" /></td>
			<td><?php echo e($row->first_name); ?></td>
			<td><?php echo e($row->last_name); ?></td>
			<td>
				
				<form action="<?php echo e(route('fcont.destroy', $row->id)); ?>" method="post">
					<a href="<?php echo e(route('fcont.show', $row->id)); ?>" class="btn btn-primary">Show</a>
					<a href="<?php echo e(route('fcont.edit', $row->id)); ?>" class="btn btn-warning">Edit</a>
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $data->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('features.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Said\Desktop\git\design-project-thunderbolt\resources\views/features/index.blade.php */ ?>