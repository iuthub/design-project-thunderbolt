<?php $__env->startSection('main'); ?>

<header class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.html" class="navbar-brand">Thundebolt</a>
            </div>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li><a href="#contact"><?php echo e($item->first_name); ?></a></li>
              </ul>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Web Design & Development</h2>
          <h3 class="title">Thundebolt</h3>
          <h4 class="sub-title">We Create amazing designs</h4>
          <button type="submit" class="btn btn-submit">Download Now</button>
        </div>
      </div>
    </div>
  </header>
  <!--/ header-->
  <!---->
  <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span>Creative, flexible and affordable website design<span class="dec-tec">”</span></h3>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  

  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/wow.js')); ?>"></script>
  <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
  <script src="<?php echo e(asset('contactform/contactform.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.landingp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Said\Desktop\git\design-project-thunderbolt\resources\views/public/landing.blade.php */ ?>