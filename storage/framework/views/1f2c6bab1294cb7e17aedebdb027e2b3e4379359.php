<?php $__env->startSection('main'); ?>

<h2>fskfdsksdfj</h2>

<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h4><?php echo e($item->first_name); ?></h4>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

<?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h4><?php echo e($item->first_name); ?></h4>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h4><?php echo e($item->first_name); ?></h4>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

<?php $__currentLoopData = $screenshots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h4><?php echo e($item->first_name); ?></h4>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.landingp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Said\Desktop\git\design-project-thunderbolt\resources\views/public/landing.blade.php */ ?>