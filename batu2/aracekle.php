<!DOCTYPE.php>
<!--[if lt IE 7]>      .php class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         .php class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         .php class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Araç Servis - Takip</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Ara</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->




	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
									<div class="mr-auto">
										<!--
							if you want to display toplogo info on smaller screens
							than use following CSS classes below:
						 	d-sm-flex justify-content-sm-center
						 -->
										<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
											<a href="main.php" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-500">Araç<span class="fw-200">Servis</span></span>
											</a>
										</div>
									</div>
									<!--
						if you want to display toplogo info on smaller screens
						than use following CSS classes below:
						d-sm-flex justify-lg-content-end justify-content-sm-between align-items-center
					-->
									<div class="d-flex justify-lg-content-end align-items-center meta-icons">
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-email"></i>
											</div>
											<div class="media-body">
												<h6>e-Posta</h6>
												<p class="fw-400">
													Info@aracservis.com
												</p>
											</div>
										</div>
										<div class="media d-none d-md-flex">
											<div class="icon-styled color-main fs-20">
												<i class="ico-placeholder"></i>
											</div>
											<div class="media-body">
												<h6>Konum</h6>
												<p class="fw-400">
                                                Türkiye, Samsun 55050
												</p>
											</div>
										</div>
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-phone-call"></i>
											</div>
											<div class="media-body">
												<h6>Telefon</h6>
												<p class="fw-400">
                                                +90 123 456 78 90
												</p>
											</div>
										</div>
										<div class="d-none d-xl-block">
											<a href="#" class="btn btn-small btn-outline-maincolor btn-appointment">Oturumu Kapat</a>
										</div>
									</div>
								</div>
								<!-- header toggler -->
							</div>
						</div>
					</div>
				</section>


				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="main.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Araç<span class="fw-200">Servis</span></span>
								</a>
							</div>
							<div class="col-xl-12">

								<div class="nav-wrap">
									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
											<li class="active">
												<a href="main.php">Anasayfa</a>
												
											</li>

											<li>
												<a href="about.php">Sayfalar</a>
												<ul>
													<li>
														<a href="team.php">Ekibimiz</a>
														<ul>
															<li>
																<a href="team.php">Ekip Listesi</a>
															</li>
															<li>
																<a href="team-single.php">Ekip Üyeleri</a>
															</li>
														</ul>
													</li>
													<!-- blog -->
													<li>
														<a href="blog-right.php">Blog</a>
														

													<li>
														<a href="gallery-image.php">Galeri</a>
														
													<li>
														<a href="pricing.php">Fiyatlar</a>
													</li>
													</ul>
											<li>
												<a href="services.php">Hakkımızda</a>
												
											</li>
											<li>
												<a href="about.php">Vizyonumuz</a>
											</li>
											<li>
											<li>
												<a href="faq.php">Randevular</a>
												
											</li>
											
											<li>
												<a href="contact.php">İletişim</a>
												
											</li>
											
											<li>
												<a href="aracekle.php">Aracınızı Ekleyin</a>
												
											</li>
										</ul>


									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>

				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Aracınızı Ekleyin</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="main.php">Anasayfa</a>
									</li>
									<li class="breadcrumb-item">
										<a href="#">Menüler</a>
									</li>
									<li class="breadcrumb-item active">
										Aracınızı Ekleyin
									</li>
								</ol>
							</div>

						</div>
					</div>
				</section>


			</div>


			<section class="s-pt-60 s-pb-15 s-py-lg-90 ls ms">
				<div class="container">
					<div class="row c-mb-40 c-mb-lg-0">
						<div class="col-md-6 col-lg-3">
							<div class="media contact-icon">
								<div class="icon-styled color-main fs-40">
									<i class="ico-map"></i>
								</div>

								<div class="media-body">
									<h6>
										Adres
									</h6>
									<p>
                                    Şabanoğlu, 5s Otomotiv, 1884. Sokak, Tekkeköy/Samsun
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="media contact-icon">
								<div class="icon-styled color-main fs-40">
									<i class="ico-call"></i>
								</div>

								<div class="media-body">
									<h6>
										Telefon
									</h6>
									<p>
                                    +90 123 45 67 89
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="media contact-icon">
								<div class="icon-styled color-main fs-40">
									<i class="ico-email"></i>
								</div>

								<div class="media-body">
									<h6>
										e-Posta
									</h6>
									<p>
                                    info@aracservis.com
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="media contact-icon">
								<div class="icon-styled color-main fs-40">
									<i class="ico-clock"></i>
								</div>

								<div class="media-body">
									<h6>
										Çalışma Saatleri
									</h6>
									<p>
										08.00 - 19.00
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="ls map-left container-px-0">
				<div class="container-fluid">
					<div class="row align-items-center c-gutter-85">
						<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
							<div class="animate page_map" data-animation="scaleAppear">
								<div class="marker">
									<div class="marker-address">Şabanoğlu, 5s Otomotiv, 1884. Sokak, Tekkeköy/Samsun</div>
									<div class="marker-title">Fourth Marker</div>
									<div class="marker-description">
										<p><strong>Şabanoğlu, 5s Otomotiv, 1884. Sokak, Tekkeköy/Samsun</strong>.<br>
											
										</p>
									</div>
									<img class="marker-icon" src="images/map_marker_icon.png" alt="">
								</div>
								<!-- .marker -->
							</div>
							<!--.col-* -->
						</div>
						<div class="col-xl-4 col-lg-5 col-md-5 col-12">
							<div class="contact-item animate" data-animation="scaleAppear">
								<h3 class="special-heading">Aracınızı<span class="text-gradient">Ekleyin</span></h3>
								<div class="divider-35"></div>
								<form action="aracdb.php" method="post">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group has-placeholder">
												
												<input type="text" aria-required="true" size="30" value="" name="arac_sahibi" id="name" class="form-control" placeholder="Adınız Soyadınız">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group has-placeholder">
												
												<input type="text" aria-required="true" size="30" value="" name="arac_plaka" id="plaka" class="form-control" placeholder="Plaka">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group has-placeholder textarea">
												
												<textarea aria-required="true" rows="4" cols="45" name="arac_marka" id="message" class="form-control" placeholder="Marka/Model/Yıl"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 mt-20">
											<div class="form-group">
												<button type="submit" id="submit" name="submit" class="btn btn-small btn-outline-maincolor"><span>Aracınızı Ekleyin</span>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--.col-* -->
					</div>
				</div>
			</section>

			<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<a href="main.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Araç<span class="fw-200">Servis</span></span>
								</a>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</div>
									<p class="media-body color-grey">Şabanoğlu, 5s Otomotiv, 1884. Sokak, Tekkeköy/Samsun </p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</div>

									<p class="media-body color-grey">+90 123 45 67 89</p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</div>
									<p class="media-body color-grey">
										<a href="mailto:">info@aracservis.com</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
							<div class="widget widget_page_links">
								<h3>Useful Pages</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Contact Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Blog post</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>About Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Services</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
							<div class="widget widget_services_links">
								<h3>Services</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Exterior Hand Wash</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tower Hand Dry</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tire Dressing</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Wheel Shine</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
							<div class="widget widget_working_hours">
								<h3>Our Hours</h3>
								<ul>
									<li class="row">
										<div class="color-grey col-3">
											Mn-Fr
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 8.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sat
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 4.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sun
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">output</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>


			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
								<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&amp;callback=initGoogleMap"></script>

</body>


<.php>