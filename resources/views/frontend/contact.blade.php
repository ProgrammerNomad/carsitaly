<!DOCTYPE html>
<html class="load-full-screen">
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="LimpidThemes">

	<title>Cruise - Responsive Travel Agency Template</title>

    <!-- STYLES -->
	<link href="assets/css/animate.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl-carousel-theme.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/flexslider.css" rel="stylesheet" media="screen">
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
	<!-- LIGHT -->
	<link rel="stylesheet" type="text/css" href="assets/css/dummy.css" id="select-style">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- FONTS -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>

</head>
<body class="load-full-screen">

<!-- BEGIN: PRELOADER -->
<div id="loader" class="load-full-screen">
	<div class="loading-animation">
		<span><i class="fa fa-plane"></i></span>
		<span><i class="fa fa-bed"></i></span>
		<span><i class="fa fa-ship"></i></span>
		<span><i class="fa fa-suitcase"></i></span>
	</div>
</div>
<!-- END: PRELOADER -->

<!-- BEGIN: COLOR SWITCHER -->
<!-- <div class="cswitcher">
	<div id="color-switcher">
		<h6>CHOOSE COLOR</h6>
		<ul>
			<li class="green" data-path="assets/css/color/green.css"></li>
			<li class="light-green" data-path="assets/css/color/light-green.css"></li>
			<li class="red" data-path="assets/css/dummy.css"></li>
			<li class="blue" data-path="assets/css/color/blue.css"></li>
			<li class="brown" data-path="assets/css/color/brown.css"></li>
			<li class="purple" data-path="assets/css/color/purple.css"></li>
			<li class="orange" data-path="assets/css/color/orange.css"></li>
			<li class="yellow" data-path="assets/css/color/yellow.css"></li>
		</ul>
	</div>
</div>
<span id="stoggle"><i class="fa fa-cog"></i></span> -->
<!-- END: COLOR SWITCHER -->

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
	<div class="row header-top">
		<div class="container clear-padding">
			<div class="navbar-contact">
				<div class="col-md-7 col-sm-6 clear-padding">
					<a href="#" class="transition-effect"><i class="fa fa-phone"></i> (+91) 1234567890</a>
					<a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i> support@email.com</a>
				</div>
				<div class="col-md-5 col-sm-6 clear-padding search-box">
					<div class="col-md-6 col-xs-5 clear-padding">
						<form >
							<div class="input-group">
								<input type="text" name="search" class="form-control" required placeholder="Search">
								<span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
							</div>
						</form>
					</div>
					<div class="col-md-6 col-xs-7 clear-padding user-logged">
						@if (Auth::user())
                            <a href="#" class="transition-effect">
                                <img src="assets/images/user.jpg" alt="cruise">
                                Hello  {{ Auth::user()->name }}
                            </a>
                        @endif
						<a href="signout" class="transition-effect">
							<i class="fa fa-sign-out"></i>Sign Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row light-menu">
		<div class="container clear-padding">
			<!-- BEGIN: HEADER -->
			<div class="navbar-wrapper">
				<div class="navbar navbar-default" role="navigation">
					<!-- BEGIN: NAV-CONTAINER -->
					<div class="nav-container">
						<div class="navbar-header">
							<!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<!-- BEGIN: LOGO -->
							<a class="navbar-brand logo" href="index-4.html">Car Italy and tours</a>
						</div>

						<!-- BEGIN: NAVIGATION -->
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
                                <li><a href="home"> HOME</a></li>
									<li><a href="transfer"> TRANSFERS</a></li>
									<li><a href="hotel"> HOTELS</a></li>
									<li><a href="villa"> VILLAS</a></li>
									<li><a href="tour"> TOURS</a></li>
									<li><a href="air"> AIR FARE</a></li>
									<li><a href="cruise"> CRUISE</a></li>
									<li><a href="contact"> CONTACT</a></li>
									<!-- <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-home"></i> HOME <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu"> -->
										<!-- <li><a href="index.html"> HOME STYLE 1</a></li>
										<li><a href="index-2.html"> HOME STYLE 2</a></li>
										<li><a href="index-3.html"> HOME STYLE 3</a></li>
										<li><a href="index-4.html"> HOME STYLE 4</a></li>
										<li><a href="index-5.html"> HOME STYLE 5</a></li> -->
									</ul>
								</li>
								<!-- <li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-bed"></i> HOTELS <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-3 desc">
											<h4>HOTELS</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>PAGES</h5>
											<ul>
												<li><a href="hotel.html">HOTEL SEARCH</a></li>

												<li><a href="hotel-list.html">HOTEL LIST</a></li>
												<li><a href="hotel-grid.html">HOTEL GRID</a></li>
												<li><a href="hotel-booking.html">HOTEL BOOKING</a></li>
												<li><a href="hotel-booking-2.html">HOTEL BOOKING 2</a></li>
												<li><a href="hotel-detailed-3.html">HOTEL DETAILED</a></li>
												<li><a href="hotel-detailed.html">HOTEL DETAILED 2</a></li>
											</ul>
											<h5 class="top-margin">TOP REGION</h5>
											<ul>
												<li><a href="#">ASIA</a></li>
												<li><a href="#">AFRICA</a></li>
												<li><a href="#">EAST ASIA</a></li>
												<li><a href="#">WESTERN EUROPE</a></li>
												<li><a href="#">SOUTH AMERICA</a></li>
												<li><a href="#">LATIN AMERICA</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>TOP REGION</h5>
											<ul>
												<li><a href="#">ASIA</a></li>
												<li><a href="#">AFRICA</a></li>
												<li><a href="#">EAST ASIA</a></li>
												<li><a href="#">WESTERN EUROPE</a></li>
												<li><a href="#">SOUTH AMERICA</a></li>
												<li><a href="#">LATIN AMERICA</a></li>
											</ul>
											<h5 class="top-margin">TOP DESTINATION</h5>
											<ul>
												<li><a href="#">BENGLURU</a></li>
												<li><a href="#">CHENNAI</a></li>
												<li><a href="#">CALIFORNIA</a></li>
												<li><a href="#">GOA</a></li>
												<li><a href="#">NEW YORK</a></li>
												<li><a href="#">NEW DELHI</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<div class="img-div clear-top">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>20% OFF</h5>
													<p>On Paris HOTELS</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
											<div class="img-div">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>20% OFF</h5>
													<p>On Paris HOTELS</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plane"></i> FLIGHTS <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-3 desc">
											<h4>FLIGHTS</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>PAGES</h5>
											<ul>
												<li><a href="flight.html">FLIGHT SEARCH</a></li>
												<li><a href="flight-list-2.html">FLIGHT LIST</a></li>
												<li><a href="flight-list.html">FLIGHT LIST 2</a></li>
												<li><a href="flight-booking.html">FLIGHT BOOKING</a></li>
											</ul>
											<div class="img-div">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>30% OFF</h5>
													<p>On BANGKOK FLIGHTS</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>TOP REGION</h5>
											<ul>
												<li><a href="#">ASIA</a></li>
												<li><a href="#">AFRICA</a></li>
												<li><a href="#">EAST ASIA</a></li>
												<li><a href="#">WESTERN EUROPE</a></li>
											</ul>
											<div class="img-div">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>10% OFF</h5>
													<p>On DUBAI FLIGHTS</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>CHEAP FLIGHTS TO</h5>
											<ul>
												<li><a href="#">BENGLURU</a></li>
												<li><a href="#">CHENNAI</a></li>
												<li><a href="#">CALIFORNIA</a></li>
												<li><a href="#">GOA</a></li>
											</ul>
											<div class="img-div">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>20% OFF</h5>
													<p>On Paris Flights</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-suitcase"></i> TOURS <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-3 desc">
											<h4>TOURS</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>PAGES</h5>
											<ul>
												<li><a href="holiday.html">TOUR SEARCH</a></li><li><a href="holidays-list.html">TOUR LIST</a></li>
												<li><a href="holidays-grid.html">TOUR GRID</a></li>
												<li><a href="holidays-grid-2.html">TOUR GRID 2</a></li>
												<li><a href="holiday-detail-2.html">TOUR DETAIL</a></li>
												<li><a href="holiday-detail.html">TOUR DETAIL 2</a></li>
												<li><a href="holiday-booking.html">TOUR BOOKING</a></li>
												<li><a href="holiday-booking-2.html">TOUR BOOKING 2</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>TOP REGION</h5>
											<ul>
												<li><a href="#">ASIA</a></li>
												<li><a href="#">AFRICA</a></li>
												<li><a href="#">EAST ASIA</a></li>
												<li><a href="#">WESTERN EUROPE</a></li>
												<li><a href="#">SOUTH AMERICA</a></li>
												<li><a href="#">LATIN AMERICA</a></li>
												<li><a href="#">ASIA</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<div class="img-div clear-top">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>DUBAI</h5>
													<p>Starting From $599</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-taxi"></i> CARS <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-3 desc">
											<h4>CARS</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>PAGES</h5>
											<ul>
												<li><a href="car.html">CAR SEARCH</a></li>
												<li><a href="car-grid-3.html">CAR GRID</a></li>
												<li><a href="car-list.html">CAR LIST</a></li>
												<li><a href="car-detailed-2.html">CAR DETAIL</a></li>
												<li><a href="car-detailed.html">CAR DETAIL 2</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>TOP REGION</h5>
											<ul>
												<li><a href="#">ASIA</a></li>
												<li><a href="#">AFRICA</a></li>
												<li><a href="#">EAST ASIA</a></li>
												<li><a href="#">WESTERN EUROPE</a></li>
												<li><a href="#">SOUTH AMERICA</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<div class="img-div clear-top">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>DUBAI</h5>
													<p>Starting From $599</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-ship"></i> CRUISE <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-3 desc">
											<h4>CRUISES</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>PAGES</h5>
											<ul>
												<li><a href="cruise.html">CRUISE SEARCH</a></li>
												<li><a href="cruise-list.html">CRUISE LIST</a></li>
												<li><a href="cruise-detail-2.html">CRUISE DETAIL</a></li>
												<li><a href="cruise-detail.html">CRUISE DETAIL 2</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>TOP REGION</h5>
											<ul>
												<li><a href="#">ASIA</a></li>
												<li><a href="#">AFRICA</a></li>
												<li><a href="#">EAST ASIA</a></li>
												<li><a href="#">WESTERN EUROPE</a></li>
												<li><a href="#">SOUTH AMERICA</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<div class="img-div clear-top">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>DUBAI</h5>
													<p>Starting From $599</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</li>
								<li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-file"></i> PAGES <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-4 links">
											<h5>BLOG PAGES</h5>
											<ul>
												<li><a href="blog-right-sidebar.html">RIGHT SIDEBAR</a></li>
												<li><a href="blog-left-sidebar.html">LEFT SIDEBAR</a></li>
												<li><a href="blog-full-width.html">FULL WIDTH</a></li>
												<li><a href="single-right-sidebar.html">SINGLE RIGHT SIDEBAR</a></li>
												<li><a href="single-left-sidebar.html">SINGLE LEFT SIDEBAR</a></li>
												<li><a href="single-full-width.html">SINGLE FULL WIDTH</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>SPECIAL PAGES</h5>
											<ul>
												<li><a href="coming-soon.html">COMING SOON</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="404-2.html">404 2</a></li>
												<li><a href="loading.html">LOADING</a></li>
												<li><a href="login.html">LOGIN/REGSITER</a></li>
												<li><a href="elements.html">ELEMENTS</a></li>
												<li><a href="thank-you.html">COMING SOON</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>EXTRA PAGES</h5>
											<ul>
												<li><a href="user-profile.html">USER DASHBOARD</a></li>
												<li><a href="gallery-3column.html">GALLERY 3 COLUMN</a></li>
												<li><a href="gallery-4column.html">GALLERY 4 COLUMN</a></li>
												<li><a href="about-us.html">ABOUT US</a></li>
												<li><a href="contact-us.html">CONTACT US</a></li>
											</ul>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<div class="img-div clear-top">
												<img src="assets/images/tour1.jpg" alt="cruise">
												<div class="overlay">
													<h5>DUBAI</h5>
													<p>Starting From $599</p>
													<a href="#">KNOW MORE</a>
												</div>
											</div>
										</li>
									</ul>
									<div class="clearfix"></div>
								</li> -->
							</ul>
						</div>
						<!-- END: NAVIGATION -->
					</div>
					<!--END: NAV-CONTAINER -->
				</div>
			</div>
			<!-- END: HEADER -->
		</div>
	</div>
	<!-- START: PAGE TITLE -->
	<div class="row page-title">
		<div class="container clear-padding text-center flight-title">
			<h3>CONTACT US</h3>
			<h4 class="thank">Let's Get Connected</h4>
		</div>
	</div>
	<!-- END: PAGE TITLE -->

	<!-- START: CONTACT-US -->
	<div class="row contact-address">
		<div class="container clear-padding">
			<div class="text-center">
				<h2>GET IN TOUCH</h2>
				<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h5>
				<div class="space"></div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-map-marker"></i>
					<p>Street #42, Burbank, LA</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-envelope-o"></i>
					<p><a href="mailto:your@email.com">your@email.com</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-phone"></i>
					<p>+91 1234567890</p>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTACT-US -->
	<!-- START: MAP & CONTACT FORM -->
	<div class="row">
		<div class="container clear-padding">
			<div class="col-md-6 col-sm-6">
				<!-- <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126935.95805515119!2d39.07477985663115!3d-6.164400962403211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd0ba23b63ecb%3A0x52c848ab6efc138e!2sItaly%2C%20Tanzania!5e0!3m2!1sen!2sin!4v1707890472929!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

				<iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7004.508557808304!2d77.3867335!3d28.6221402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd1dfd0044e5d%3A0xabac6fbb0ef99df!2sZOHOBO!5e0!3m2!1sen!2sin!4v1707890666826!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-md-6 col-sm-6 contact-form">
				<div class="col-md-12">
					<h2>DROP A MESSAGE</h2>
					<h5>Drop Us a Message</h5>
				</div>
				<form >
					<div class="col-md-6 col-sm-6">
						<input type="text" name="name" required class="form-control" placeholder="Your Name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" name="email" required class="form-control" placeholder="Your Email">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<input type="text" name="message-title" required class="form-control" placeholder="Message Title">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<textarea class="form-control" rows="5" id="comment" placeholder="Your Message"></textarea>
					</div>
					<div class="clearfix"></div>
					<div class="text-center">
						<button type="submit" class="btn btn-default submit-review">SEND YOUR MESSAGE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END: MAP & CONTACT FORM -->

<<!-- START: FOOTER -->
<section id="footer">
	<footer>
		<div class="row main-footer-sub">
			<div class="container clear-padding">
				<div class="col-md-7 col-sm-7">
					<form >
						<label>SUBSCRIBE TO OUR NEWSLETTER</label>
						<div class="clearfix"></div>
						<div class="col-md-9 col-sm-8 col-xs-6 clear-padding">
							<input class="form-control" type="email" required placeholder="Enter Your Email" name="email">
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6 clear-padding">
							<button type="submit"><i class="fa fa-paper-plane"></i>SUBSCRIBE</button>
						</div>
					</form>
				</div>
				<div class="col-md-5 col-sm-5">
					<div class="social-media pull-right">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main-footer row">
			<div class="container clear-padding">
				<div class="col-md-3 col-sm-6 about-box">
					<h3>Car Italy and tours</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<a href="#">READ MORE</a>
				</div>
				<div class="col-md-3 col-sm-6 links">
					<h4>Popular Tours</h4>
					<ul>
						<li><a href="#">SAFARI BLUE</a></li>
						<li><a href="#">Tour Name</a></li>
						<li><a href="#">Tour Name</a></li>
						<li><a href="#">Tour Name</a></li>
						<li><a href="#">Tour Name</a></li>
						<li><a href="#">Tour Name</a></li>
						<li><a href="#">Tour Name</a></li>
					</ul>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-3 col-sm-6 links">
					<h4>Our Services</h4>
					<ul>
						<li><a href="#">Domestic Flights</a></li>
						<li><a href="#">International Flights</a></li>
						<li><a href="#">Tours & Holidays</a></li>
						<li><a href="#">Domestic Hotels</a></li>
						<li><a href="#">International Hotels</a></li>
						<li><a href="#">Cruise Holidays</a></li>
						<li><a href="#">Car Rental</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 contact-box">
					<h4>Contact Us</h4>
					<p><i class="fa fa-home"></i> Street #156 Burbank, Studio City Hollywood, California USA</p>
					<p><i class="fa fa-phone"></i> +91 1234567890</p>
					<p><i class="fa fa-envelope-o"></i> support@domain.com</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 text-center we-accept">
					<h4>We Accept</h4>
					<ul>
						<li><img src="images-new/mastercard.png" alt="cruise"></li>
						<li><img src="images-new/visa.png" alt="cruise"></li>
						<li><img src="images-new/american-express.png" alt="cruise"></li>
						<li><img src="images-new/mastercard.png" alt="cruise"></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-footer-nav row">
			<div class="container clear-padding">
				<div class="col-md-6 col-sm-6">
					<p>© 2024 All Rights Reserved. Designed &amp; Developed By <a href="https://mobrilz.com/">Mobrilz</a></p>
				</div>
				<!-- <div class="col-md-6 col-sm-6">
					<ul>
						<li><a href="#">FLIGHTS</a></li>
						<li><a href="#">TOURS</a></li>
						<li><a href="#">CARS</a></li>
						<li><a href="#">HOTELS</a></li>
						<li><a href="#">BLOG</a></li>
					</ul>
				</div> -->
				<div class="go-up">
					<a href="#"><i class="fa fa-arrow-up"></i></a>
				</div>
			</div>
		</div>
	</footer>
</section>
<!-- END: FOOTER -->
</div>
<!-- END: SITE-WRAPPER -->

<!-- Load Scripts -->
<script src="assets/js/respond.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/plugins/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/wow.min.js"></script>
<script src="assets/js/js.js"></script>
</body>
</html>
