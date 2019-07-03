<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCAA</title>
  <meta charset="UTF-8">
 <!--  <meta name="description" content="HALO photography portfolio template"> -->
<!--   <meta name="keywords" content="photography, portfolio, onepage, creative, html"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->   
 <!--  <link href="img/favicon.ico" rel="shortcut icon"/> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/flaticon.css"/>
  <link rel="stylesheet" href="css/animate.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>



        <div class="flex-center position-ref full-height">


                 {{--   @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Join</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
 --}}
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section start -->
  <header class="header-section sp-pad">
    <h3 class="site-logo">SCAA</h3>
    <form class="search-top">
      <button class="se-btn"><i class="fa fa-search"></i></button>
      <input type="text" placeholder="Search.....">
    </form>
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
    <nav class="main-menu">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="commit">COMMITTEE</a></li>
        <li><a href="leader">PAST LEADERS</a></li>
        {{-- <li><a href="tour">TOURS</a></li> --}}
        <li><a href="showevent">EVENT</a></li>
        <li><a href="sport">SPORTS</a></li>
        <li><a href="shownews">NEWS</a></li>
        <li><a href="notices">NOTICE</a></li>
        <li><a href="galary">GALARY</a></li>
        <li><a href="showscholar">SCHOLARSHIP</a></li>
        <li><a href="contact">Contact</a></li>
        

                    @if (Auth::check())
                       <li> <a href="{{ url('/home') }}"> {{ Auth::user()->name }}</a></li>
                    @else
                       <li> <a href="{{ url('/login') }}">Join</a></li>
                      <li>  <a href="{{ url('/register') }}">Register</a></li>
                    @endif
              
     
         

    
        
      </ul>
    </nav>
  </header>
  <!-- Header section end -->


  <!-- Hero section start -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
        <div class="hs-text">
          <h2 class="hs-title"></h2>
          <p class="hs-des">We Create Bonding <br>between Old and Young and more</p>
        </div>
      </div>
      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/2.jpg">
        <div class="hs-text">
          <h2 class="hs-title"></h2>
          <p class="hs-des">We are SUSTIAN<br> and more</p>
        </div>
      </div>
      
      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/3.jpg">
        <div class="hs-text">
          <h2 class="hs-title"></h2>
          <p class="hs-des">We are SUSTIAN<br> and more</p>
        </div>
      </div>

      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/4.jpg">
        <div class="hs-text">
          <h2 class="hs-title"></h2>
          <p class="hs-des">We are SUSTIAN<br> and more</p>
        </div>
      </div>

      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/5.jpg">
        <div class="hs-text">
          <h2 class="hs-title"></h2>
          <p class="hs-des">We are SUSTIAN<br> and more</p>
        </div>
      </div>
      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/6.jpg">
        <div class="hs-text">
          <h2 class="hs-title"></h2>
          <p class="hs-des">We are SUSTIAN<br> and more</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end -->


  <!-- Intro section start -->
  <section class="intro-section sp-pad spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-4 intro-text">
          <span class="sp-sub-title">SUST-CSE Alumni Association</span>
          <h3 class="sp-title">We are so__</h3>
          <p>We want to create a strong bonding between seniors and juniors</p>
          <a href="#" class="site-btn">Read More</a>
        </div>
        <div class="col-xl-7 offset-xl-1">
          <figure class="intro-img mt-5 mt-xl-0">
            <img src="img/intro.jpg" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro section end -->


  <!-- Portfolio section start -->
  <section class="portfolio-section">
    <div class="portfolio-warp">
      <!-- single item -->
      <div class="single-portfolio set-bg" data-setbg="img/portfolio/1.jpg">
        <a  class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/1.jpg"></div>
          <h5>SUST SHAHEED MINAR</h5>
          <!-- <p>Landscape Photography</p> -->
        </a>
      </div>
      <!-- single item -->
      <div class="single-portfolio set-bg" data-setbg="img/portfolio/2.jpg">
        <a class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/2.jpg"></div>
          <h5>SUST IN RAINY SEASON</h5>
          <!-- <p>Landscape Photography</p> -->
        </a>
      </div>
      <!-- single item -->
      <div class="single-portfolio set-bg" data-setbg="img/portfolio/3.jpg">
        <a class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/3.jpg"></div>
          <h5>SUST IICT BUILDING</h5>
          <!-- <p>Landscape Photography</p> -->
        </a>
      </div>
      <!-- single item -->
      <div class="single-portfolio sm-wide set-bg" data-setbg="img/portfolio/4.jpg">
        <a  class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/4.jpg"></div>
          <h5>SUST MOSQUE</h5>
         <!--  <p>Landscape Photography</p> -->
        </a>
      </div>
      <!-- single item -->
      <div class="single-portfolio sm-wide set-bg " data-setbg="img/portfolio/5.jpg">
        <a class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/5.jpg"></div>
          <h5>UNIVERSITY CENTER</h5>
         <!--  <p>Landscape Photography</p> -->
        </a>
      </div>
      <!-- single item -->
      <div class="single-portfolio set-bg" data-setbg="img/portfolio/6.jpg">
        <a  class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/6.jpg"></div>
          <h5>SUST LAKE</h5>
          <!-- <p>Landscape Photography</p> -->
        </a>
      </div>
      <!-- single item -->
      <div class="single-portfolio sm-wide md-w-100 set-bg " data-setbg="img/portfolio/7.jpg">
        <a  class="portfolio-info">
          <div class="pfbg set-bg" data-setbg="img/portfolio/7.jpg"></div>
          <h5>CENTRAL AUDITORIAM</h5>
          <!-- <p>Landscape Photography</p> -->
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
  <!-- Portfolio section end -->


  <!-- Milestones section start -->
  <section class="milestones-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 fact-box">
          <div class="fact-content">
           <i class="fas fa-user-tie"></i>
            <h2>48</h2>
            <p>Alumni</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 fact-box">
          <div class="fact-content">
            <i class="fas fa-user"></i>
            <h2>7</h2>
            <p>General Students</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 fact-box">
          <div class="fact-content">
            <i class="fas fa-chalkboard-teacher"></i>
            <h2>23K</h2>
            <p>Faculty Members</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 fact-box">
          <div class="fact-content">
            <i class="fas fa-history"></i>
            <h2>19</h2>
            <p>History</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Milestones section end -->


  <!-- Services section start -->
  <section class="services-section spad">
    <div class="container-fluid services-warp">
      <div class="services-text">
        <div class="container p-0">
        <span class="sp-sub-title">SUST CSE ALUMNI ASSOCIATION</span>
          <h3 class="sp-title">see What we do</h3>
          <p>We create a strong relationship</p>
          <a href="#" class="site-btn">Read More</a>
        </div>
      </div>
      <div class="container p-0">
        <div class="row">
          <div class="col-xl-8 offset-xl-4">
            <div class="row">
              <div class="col-md-6">
                <div class="icon-box">
                  <i class="flaticon-video-camera"></i>
                  <h4>Video Footages</h4>
                  <p>Suspendisse dictum enim sit amet libero feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="icon-box">
                  <i class="flaticon-photo-camera"></i>
                  <h4>Photo Shootings</h4>
                  <p>Congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="icon-box">
                  <i class="flaticon-safebox"></i>
                  <h4>photo albums</h4>
                  <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="icon-box">
                  <i class="flaticon-idea"></i>
                  <h4>Original ideas</h4>
                  <p>Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="service-more-link">
      <a href="#" class="arrow-btn">
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </section>
  <!-- Services section start end -->


  <!-- Contact section start -->
  <section class="contact-section set-bg spad" data-setbg="img/contact.jpg">
    <div class="container-fluid contact-warp">
      <div class="contact-text">
        <div class="container p-0">
          <span class="sp-sub-title">SUST CSE ALUMNI ASSOCIATION</span>
          <h3 class="sp-title">Stay in touch</h3>
          <p>IF YOU HAVE ANY QUERY ABOUT OUR WEBSITE PLEASE COLLABORATE WITH US BY GIVING MESSAGE...THANK YOU</p>

          <ul class="con-info">
            <li><i class="flaticon-phone-call"></i>0174284770</li>
            <li><i class="flaticon-envelope"></i>www.cse.sust.edu</li>
            <li><i class="flaticon-placeholder"></i>AKHALIA<br> SYLHET</li>
          </ul>
        </div>
      </div>
      <div class="container p-0">
        <div class="row">
          <div class="col-xl-8 offset-xl-4">
            <form class="contact-form" method="post" action="{{url('contacts')}}" enctype="multipart/form-data">

              {{csrf_field()}}
            
              <div class="row">
                <div class="col-md-6">
                  <input type="text" placeholder="Your name">
                </div>
                <div class="col-md-6">
                  <input type="email" placeholder="E-mail">
                </div>
                <div class="col-md-12">
                  <input type="text" placeholder="Subject">
                  <textarea placeholder="Message"></textarea>
                  <button class="site-btn light" href="contacts" >Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact section end -->
</div>


  <!-- Footer section start -->
  <footer class="footer-section spad">
    <div class="container text-center">
      <h2>Let’s work together!</h2>
      <p>www.cse.sust.edu</p>
      <div class="social">
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a> </br>


</br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://www.sust.edu/d/cse/faculty" target="_blank">SUST_CSE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </div>
    </div>


  </footer>
  <!-- Footer section end -->


  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>