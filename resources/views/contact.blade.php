<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	{{-- <meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html"> --}}
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
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
       {{--  <li><a href="tour">TOURS</a></li> --}}
        <li><a href="showevent">EVENT</a></li>
        <li><a href="sport">SPORTS</a></li>
        <li><a href="shownews">NEWS</a></li>
        <li><a href="notices">NOTICE</a></li>
        <li><a href="galary">GALARY</a></li>
        <li><a href="scholarship">SCHOLARSHIP</a></li>
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


	<!-- Page top section start -->
	<div class="page-top-area set-bg" >
		<div class="breadcrumb-area">
			<!-- <a href="#">Home</a> / <span>Contact</span> -->
		</div>
	</div>
	<!-- Page top section end -->

	<div class="map-area" id="map-canvas"></div>


		<!-- Contact section start -->
	<section class="contact-section set-bg spad" data-setbg="img/contact.jpg">
		<div class="container-fluid contact-warp">
			<div class="contact-text">
				<div class="container p-0">
					<span class="sp-sub-title">SUST-CSE Alumni</span>
					<h3 class="sp-title">Stay in touch</h3>
					<p>If You have any query please contact with us</p>

					<ul class="con-info">
						<li><i class="flaticon-phone-call"></i>+45 677 8993000 223</li>
						<li><i class="flaticon-envelope"></i></li>
						<li><i class="flaticon-placeholder"></i>Sylhet</li>
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
									<input type="text" placeholder="Your name" name="name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="E-mail" name="email">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject" name="subject">
									<textarea placeholder="Message" name="message"></textarea>
									<button class="site-btn light" type="submit">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->


	<!-- Footer section start -->
	<footer class="footer-section spad">
		<div class="container text-center">
			<h2>Let’s work together!</h2>
			<p></p>
			<div class="social">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a></br>


</br><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">SUST-CSE</a>
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

	<!-- load for map -->
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script> --}}
	<script src="js/map.js"></script>

</body>
</html>