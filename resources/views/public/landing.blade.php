@extends('public.landingp')

@section('main')

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
            @foreach($menus as $item)
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li><a href="#contact">{{$item->first_name}}</a></li>
              </ul>
            </div>
            @endforeach
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
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Easy to Learn and Design</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Bootstrap 3.3.2</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Responsive Design</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">No Coding, No Shortcodes</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-lightbulb-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">High Coversion</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-06s">
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Save Tons of Time</h3>
              <p class="txt-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper. </p>
            </div>
          </div>
        </div>
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

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/wow.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('contactform/contactform.js')}}"></script>


@endsection