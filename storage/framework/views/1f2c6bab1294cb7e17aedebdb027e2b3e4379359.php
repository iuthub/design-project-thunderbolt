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


  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 wow fadeInLeft delay-05s">
          <div class="section-title">
            <h2 class="head-title">Features</h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
          </div>
        </div>
          <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
             <img src="images/<?php echo e($item->image); ?>">
            </div>
          
            <div class="icon-text">
              <h3 class="txt-tl"><?php echo e($item->first_name); ?></h3>
              <p class="txt-para"><?php echo e($item->last_name); ?></p>
            </div>
          </div>      
          
        </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
    </div>
  </section>


   <section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="cta-txt">
            <h3>Subscribe For Updates</h3>
            <p>Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <a href="#" class="btn btn-submit">Subscribe Now</a>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section class="section-padding wow fadeInUp delay-02s" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="section-title">
            <h2 class="head-title">Portfolio</h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port01.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port02.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port03.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port04.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port05.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port06.jpg" alt="" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->

   <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
            <p class="sec-para black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Email Us</h3>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="contact-info">
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-send">Send</button>
              </form>
            </div>

          </div>
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title">Visit Us</h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Ziyolillar 9, Tashkent, Uzbekistan</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: +998 71 289 99 99</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">info@thudebolt.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->

    <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Thunderbolt Team - All rights reserved
          
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
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