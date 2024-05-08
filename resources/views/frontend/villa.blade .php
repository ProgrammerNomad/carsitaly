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
								</li>
									<!-- <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-home"></i> HOME <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="index.html"> HOME STYLE 1</a></li>
										<li><a href="index-2.html"> HOME STYLE 2</a></li>
										<li><a href="index-3.html"> HOME STYLE 3</a></li>
										<li><a href="index-4.html"> HOME STYLE 4</a></li>
										<li><a href="index-5.html"> HOME STYLE 5</a></li>
									</ul>
								</li>
								<li class="dropdown mega">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-bed"></i> HOTELS <i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu mega-menu">
										<li class="col-md-3 col-sm-3 desc">
											<h4>HOTELS</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
										</li>
										<li class="col-md-3 col-sm-4 links">
											<h5>PAGES</h5>
											<ul>
												<li><a href="hotel.html">VillasSEARCH</a></li>

												<li><a href="hotel-list.html">VillasLIST</a></li>
												<li><a href="hotel-grid.html">VillasGRID</a></li>
												<li><a href="hotel-booking.html">VillasBOOKING</a></li>
												<li><a href="hotel-booking-2.html">VillasBOOKING 2</a></li>
												<li><a href="hotel-detailed-3.html">VillasDETAILED</a></li>
												<li><a href="hotel-detailed.html">VillasDETAILED 2</a></li>
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
<!-- START: MODIFY SEARCH -->
	<div class="row modify-search modify-hotel">
		<div class="container clear-padding">
			<form >
				<div class="col-md-4">
					<div class="form-gp">
						<label>Location</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" name="city" class="form-control" required placeholder="E.g. Italy">
							<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Check In</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" id="check_in" name="check_in" class="form-control" placeholder="DD/MM/YYYY">
							<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Check Out</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" id="check_out" name="check_out" class="form-control" required placeholder="DD/MM/YYYY">
							<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-1 col-sm-6 col-xs-3">
					<div class="form-gp">
						<label>Rooms</label>
						<select class="selectpicker">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-9">
					<div class="form-gp">
						<button type="submit" class="modify-search-button btn transition-effect">MODIFY SEARCH</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- END: MODIFY SEARCH -->

<!-- START: LISTING AREA-->
<div class="row">
	<div class="container">
		<!-- START: FILTER AREA -->
		<div class="col-md-3 clear-padding">
			<div class="filter-head text-center">
				<h4>25 Result Found Matching Your Search.</h4>
			</div>
			<div class="filter-area">
				<div class="price-filter filter">
					<h5><i class="fa fa-usd"></i> Price</h5>
					<p>
						<label></label>
						<input type="text" id="amount" readonly>
					</p>
					<div id="price-range"></div>
				</div>
				<div class="name-filter filter">
					<h5><i class="fa fa-bed"></i> Villa's Name</h5>
					<div class="input-group margin-bottom-sm">
						<input type="text" name="destination_city" class="form-control" required placeholder="E.g. Italy">
						<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
					</div>
				</div>
				<div class="star-filter filter">
					<h5><i class="fa fa-star"></i> Star</h5>
					<ul>
						<li><input type="checkbox"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
						<li><input type="checkbox"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
						<li><input type="checkbox"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
						<li><input type="checkbox"> <i class="fa fa-star"></i><i class="fa fa-star"></i></li>
						<li><input type="checkbox"> <i class="fa fa-star"></i></li>
						<li><input type="checkbox"> <i class="fa fa-star"></i> Any</li>
					</ul>
				</div>
				<div class="location-filter filter">
					<h5><i class="fa fa-map-marker"></i> Location</h5>
					<ul>
						<li><input type="checkbox"> Italy</li>
						<li><input type="checkbox"> Italy</li>
						<li><input type="checkbox"> Italy</li>
						<li><input type="checkbox"> Italy</li>
						<li><input type="checkbox"> Italy</li>
						<li><input type="checkbox"> Italy</li>
					</ul>
				</div>
				<div class="facilities-filter filter">
					<h5><i class="fa fa-list"></i> VillasFacilities</h5>
					<ul>
						<li><input type="checkbox"> <i class="fa fa-wifi"></i> Wifi</li>
						<li><input type="checkbox"> <i class="fa fa-beer"></i> Bar</li>
						<li><input type="checkbox"> <i class="fa fa-cutlery"></i> Restaurant</li>
						<li><input type="checkbox"> <i class="fa fa-coffee"></i> Coffee</li>
						<li><input type="checkbox"> <i class="fa fa-wifi"></i> Wifi</li>
						<li><input type="checkbox"> <i class="fa fa-beer"></i> Bar</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END: FILTER AREA -->

		<!-- START: INDIVIDUAL LISTING AREA -->
		<div class="col-md-9 hotel-listing">

			<!-- START: SORT AREA -->
			<div class="sort-area col-sm-10">
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Price</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Star Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>User Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Name</option>
						<option> Ascending</option>
						<option> Descending</option>
					</select>
				</div>
			</div>
			<!-- END: SORT AREA -->
			<div class="clearfix visible-xs-block"></div>
			<div class="col-sm-2 view-switcher">
				<div class="pull-right">
					<a class="switchgrid" title="Grid View">
						<i class="fa fa-th-large"></i>
					</a>
					<a class="switchlist active" title="List View">
						<i class="fa fa-list"></i>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- START: VillasLIST VIEW -->
			<div class="switchable col-md-12 clear-padding">
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="images-new/DSC_0835.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>Villas <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p><i class="fa fa-map-marker"></i>Italy <i class="fa fa-phone"></i>(+91) 123456789</p>
								</div>
								<div class="hotel-facility">
									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50 Avg/Night</h5>
								</div>
								<div class="book">
									<a href="#">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="images-new/DSC_0835.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>Villas <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p><i class="fa fa-map-marker"></i>Italy <i class="fa fa-phone"></i>(+91) 123456789</p>
								</div>
								<div class="hotel-facility">
									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>

							<div class="room-book-box">
								<div class="price">
									<h5>$50 Avg/Night</h5>
								</div>
								<div class="book">
									<a href="#">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="images-new/DSC_0835.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>Villas <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p><i class="fa fa-map-marker"></i>Italy <i class="fa fa-phone"></i>(+91) 123456789</p>
								</div>
								<div class="hotel-facility">
									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50 Avg/Night</h5>
								</div>
								<div class="book">
									<a href="#">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="images-new/DSC_0835.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>Villas <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p><i class="fa fa-map-marker"></i>Italy <i class="fa fa-phone"></i>(+91) 123456789</p>
								</div>
								<div class="hotel-facility">
									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50 Avg/Night</h5>
								</div>
								<div class="book">
									<a href="#">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="images-new/DSC_0835.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>Villas <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p><i class="fa fa-map-marker"></i>Italy <i class="fa fa-phone"></i>(+91) 123456789</p>
								</div>
								<div class="hotel-facility">
									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50 Avg/Night</h5>
								</div>
								<div class="book">
									<a href="#">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="images-new/DSC_0835.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>Villas <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p><i class="fa fa-map-marker"></i>Italy <i class="fa fa-phone"></i>(+91) 123456789</p>
								</div>
								<div class="hotel-facility">
									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50 Avg/Night</h5>
								</div>
								<div class="book">
									<a href="#">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END: VillasLIST VIEW -->
			</div>
			<div class="clearfix"></div>
			<!-- START: PAGINATION -->
			<div class="bottom-pagination">
				<nav class="pull-right">
					<ul class="pagination pagination-lg">
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">4 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">6 <span class="sr-only">(current)</span></a></li>
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&#187;</span></a></li>
					</ul>
				</nav>
			</div>
			<!-- END: PAGINATION -->
		</div>
		<!-- END: INDIVIDUAL LISTING AREA -->
	</div>
</div>
<!-- END: LISTING AREA -->

<!-- START: FOOTER -->
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
<script>

	/* Price Range Slider */

	$(function() {
		"use strict";
		$( "#price-range" ).slider({
		  range: true,
		  min: 0,
		  max: 100,
		  values: [ 3, 50 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$ " + ui.values[ 0 ] + " - $ " + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$ " + $( "#price-range" ).slider( "values", 0 ) +
		  " - $ " + $( "#price-range" ).slider( "values", 1 ) );
	  });
</script>
</body>
</html>
