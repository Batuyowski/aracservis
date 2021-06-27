<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
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

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Giriş Yap</h4>
						</div>
						<div class="modal-body">
							<form action="http://webdesign-finder.com/">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your name" name="First name">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="password" name="sigpassword">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit" class="btn btn-small btn-maincolor log-btn">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
	
		<div id="box_wrapper">

			<!-- template sections -->

			<div class="header_absolute slide_absolute ds bs s-overlay">

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
											<a href="index.php" class="logo">
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
											<a href="oturumkapat.php" class="btn btn-small btn-outline-maincolor btn-appointment">
											Oturumu Kapat
											</a>
											
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
								<a href="index.php" class="logo">
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
												<a href="index.php">Anasayfa</a>
												
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
													
													</li>
													<!-- eof blog -->

													<li>
														<a href="gallery-image.php">Galeri</a>
														
															</li>
										
													<li>
														<a href="pricing.php">Fiyatlar</a>
													</li>
													<!-- shop -->
													

														</ul>
													</li>
													<!-- eof shop -->

													<!-- features -->
													<li>
														<a href="shortcodes_iconbox.php">Hakkımızda</a>
														
													</li>
													<!-- eof shortcodes -->

													<li>
														<a href="shortcodes_widgets_default.php">Vizyonumuz</a>
													

													</li>


													<!-- events -->
													<li>
														<a href="events-left.php">Randevular</a>
													
													</li>
													
											<!-- eof features -->
											<!-- contacts -->
											<li>
												<a href="contact.php">İletişim</a>
												
											</li>

											<li>
												<a href="aracekle.php">Aracınızı Ekleyin</a>
												
											</li>
											</ul>

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

			</div>

			<section class="page_slider">
				<div class="flexslider" data-nav="false" data-dots="true">
					<ul class="slides">
						<li class="ds bs cover-image flex-slide">
							<span class="flexslider-overlay"></span>
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper text-center text-xl-left">
											<div class="intro_layers">
												<div class="divider-20 d-none d-lg-block d-xl-none"></div>
												<div class="intro_layer" data-animation="fadeInDown">
													<h2 class="text-uppercase intro_featured_word">
													<span class="color-main">GÜVENİLİR</span>
														<span class="flex-gradient">
															<span id="typed-strings">
																<span>SERVİS HİZMETİ</span>
																<span>SİGORTA HİZMETİ</span>
																<span>EKSPERTİZ HİZMETİ</span>
															</span>
															<span id="typed"></span>
														</span>
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeInDown">
													<h2 class="text-uppercase intro_featured_word">
														& ARAÇ SERVİS
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeInDown">
													<ul class="list1">
														<li>Motor Yağı Değişimi</li>
														<li>Yağ Filtresi Değişimi</li>
														<li>Lastik Bakımı</li>
														<li>Süspansiyon Sistemi Kontrolü</li>
													</ul>
												</div>
												<div class="intro_layer" data-animation="fadeInDown">
													<div class="slide-button">
														<a class="btn btn-small btn-maincolor" href="girisyap.php">Bu Hizmeti İstiyorum..</a>
													</div>
												</div>
											</div> <!-- eof .intro_layers -->

										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
							<div class="ds social-flex d-none d-lg-block">
								<p class="social-icons with-border">
									<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
									<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
									<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
								</p>
							</div>
						</li>
						<li class="ds bs cover-image flex-slide">
							<span class="flexslider-overlay"></span>
							<img src="images/slide02_01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper justify-content-center">
											<div class="intro_layers rotate_layers">
												<div class="intro_layer" data-animation="fadeInRightBig">
													<h2 class="text-uppercase intro_before_featured_word text-left">
														Bütün Markalar
													</h2>
												</div>
												<div class="intro_layer gradient-layer text-center" data-animation="fadeInDown">
													<h2 class="text-uppercase">
														<span class="text-layer">
															<span class="color-main1">İLE </span> &nbsp;İLGİLENİYORUZ!</span>
														</span>
													</h2>
												</div>
												<div class="intro_layer text-right" data-animation="fadeInLeftBig">
													<h2 class="text-uppercase intro_after_featured_word">
														ARAÇ SERVİS
													</h2>
												</div>
											</div> <!-- eof .intro_layers -->

										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
							<div class="ds social-flex d-none d-lg-block">
								<p class="social-icons with-border">
									<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
									<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
									<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
								</p>
							</div>
						</li>
						<li class="ds bs cover-image flex-slide">
							<span class="flexslider-overlay"></span>
							<img src="images/slide03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper justify-content-center">
											<div class="intro_layers rotate_layers">
												<div class="intro_layer" data-animation="fadeInRightBig">
													<h2 class="text-uppercase intro_before_featured_word text-left">
														BÜTÜN MARKALARA &
													</h2>
												</div>
												<div class="intro_layer gradient-layer text-center" data-animation="fadeInDown">
													<h2 class="text-uppercase">
														<span class="text-layer">
															<span class="color-main2">%15</span> İNDİRİM FIRSATI
														</span>
													</h2>
												</div>
												<div class="intro_layer text-right" data-animation="fadeInLeftBig">
													<h2 class="text-uppercase intro_after_featured_word">
														KAMPANYA 24.06.2022 TARİHİNDE SONA ERECEKTİR.
													</h2>
												</div>
											</div> <!-- eof .intro_layers -->

										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
							<div class="ds social-flex d-none d-lg-block">
								<p class="social-icons with-border">
									<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
									<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
									<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
								</p>
							</div>
						</li>
					</ul>
				</div> <!-- eof flexslider -->
			</section>

			<section class="ds s-pt-60 s-pt-md-5 s-pb-0 s-pb-md-15 s-pb-lg-150 choose-us-section c-gutter-10 overflow-visible" id="choose-us">
				<div class="container">
					<div class="row plan-content c-mt-0 c-mt-lg-10 c-mt-xl-0">
						<div class="col-xl-3 col-md-6">
							<div class="pricing-plan plan1 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										RUTİN BAKIM
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										BAŞLAYAN FİYATLARLA
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">200</span>
									<span class="plan-sign">₺</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>Motor Arıza Tespit & Bakımı</li>
										<li><i class="ico-check fs-12 fw-900"></i>Fren Balata Değişimi</li>
										<li><i class="ico-check fs-12 fw-900"></i>Ön Takım Kontrolü</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="pricing-plan plan2 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										ELEKTRONİK BAKIMLAR
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										BAŞLAYAN FİYATLARLA
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">350</span>
									<span class="plan-sign">₺</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>Elektronik Beyin Testi</li>
										<li><i class="ico-check fs-12 fw-900"></i>Klima Arıza Tespiti</li>
										<li><i class="ico-check fs-12 fw-900"></i>Stop Lambaları Değişimi</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="pricing-plan plan3 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										PERİYODİK BAKIM
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										BAŞLAYAN FİYATLARLA
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">500</span>
									<span class="plan-sign">₺</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>Egzoz Sistemi Kontrolü</li>
										<li><i class="ico-check fs-12 fw-900"></i>Akü Bakımı</li>
										<li><i class="ico-check fs-12 fw-900"></i>Filtre Bakımı</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="pricing-plan plan4 cs">
								<div class="plan-name">
									<h5 class="text-uppercase">
										AĞIR BAKIM
									</h5>
								</div>
								<div class="plan-description">
									<h6 class="fw-300 text-uppercase">
										BAŞLAYAN FİYATLARLA
									</h6>
								</div>
								<div class="price-wrap color-main2">
									<span class="plan-price">750</span>
									<span class="plan-sign">₺</span>

								</div>
								<div class="plan-features">
									<ul>
										<li><i class="ico-check fs-12 fw-900"></i>Periyodik bakımdaki tüm işlemler ağır bakımda da yapılır.</li>
										<li><i class="ico-check fs-12 fw-900"></i>Debriyaj seti, baskı balata kontrol edilir.</li>
										<li><i class="ico-check fs-12 fw-900"></i>Eğer ömrü dolduysa Triger Seti komple değiştirilir. Yıl veya km olarak ömrü dolduysa ihtiyaç dışında da değiştirilmesi tavsiye edilir.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="divider-145 d-none d-lg-block"></div>
					</div>
					<div class="row c-mb-45 c-mb-lg-0">
						<div class="divider-40 d-block d-lg-none"></div>
						<div class="offset-lg-2 col-lg-8 item-content text-center">
							<h3 class="special-heading text-center">Neden<span class="text-gradient">Bizi</span> Seçmelisiniz</h3>
							<p class="fs-20 color-dark">Araç Servis</p>
							<div class="divider-60 d-none d-lg-block"></div>
							<p> Araç Servis, Samsun merkezli servis & sigorta şirketidir. Şirketimiz 2005 yılında, 10 yılı aşkın profesyonel oto servis tecrübesine sahip uzmanlardan oluşan bir ekip tarafından kurulmuştur.</p>
							<p> Amacımız, müşterilerimize mümkün olan en cana yakın, en uygun elde araba servis deneyimini sunmaktır. En modern ve güncel olanı kullanıyoruz.</p>
							<div class="row text-left c-gutter-60">
								<div class="divider-35"></div>
								<div class="col-md-4">
									<div class="icon-box text-center">
										<div class="icon-styled color-main2 fs-40">
											<i class="ico-mechanic"></i>
										</div>
										<p>
											
											Büyük bir değerde birden fazla hizmet sunuyoruz
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="icon-box text-center">
										<div class="icon-styled color-main2 fs-40">
											<i class="ico-car-wash"></i>
										</div>
										<p>
											Türkiye genelinde 30'dan fazla şehirde servis şubemiz bulunmakta
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="icon-box text-center">
										<div class="icon-styled color-main2 fs-40">
											<i class="ico-painting"></i>
										</div>
										<p>
											Çevre dostu ürünler kullanmaktayız
										</p>
									</div>
								</div>
							</div>
							<div class="divider-33 d-none d-lg-block"></div>
							<div>
								<a href="about.php" class="btn btn-small btn-maincolor">Daha Fazla Oku</a> <span class="color-dark m-25">veya</span> <a href="girisyap.php" class="btn btn-small btn-outline-maincolor">Giriş Yapın</a>
							</div>
						</div>
					</div>
					<div class="divider-50 d-none d-lg-block"></div>
				</div>
			</section>

			<section class="s-pt-55 s-pb-0 s-pt-md-50 s-pt-lg-140 s-pb-lg-145 ls ms text-center steps-section" id="steps">
				<div class="container">
					<div class="col-12 text-center mb-55">
						<h4>Nasıl<span class="text-gradient">Çalışıyoruz?</span></h4>
						<p class="fs-20 color-dark">Araç Tamir Randevusu</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row c-mb-53 c-mb-lg-0">
						<div class="col-12 col-lg-3">
							<div class="steps">
								<img src="images/step01.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Teşhis</h6>
									<p class="color-dark">Aracınızdaki sorunlar teşhis edilir ve diğer aşamaya geçilir</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="steps feature-step">
								<img src="images/step02.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Eksikler Belirlenir</h6>
									<p class="color-dark">Araçta bulunan eksik veya hatalı parçalar belirlenir ve teknisyenlere iletilir</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="steps">
								<img src="images/step03.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Araç Tamir Süreci</h6>
									<p class="color-dark">Gerekli parçalar temin edildikten sonra araç sahibinin onayı alınır ve tamir sürecine başlanır</p>
								</div>
							</div>

						</div>
						<div class="col-12 col-lg-3">
							<div class="steps feature-step last-step">
								<img src="images/step04.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Teslim Süreci</h6>
									<p class="color-dark">Araç tamir edildikten sonra 1 hafta içerisinde sahibe bilgi verilerek teslim edilir</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-55 s-pt-md-50 s-pb-5 s-pt-lg-140 s-pb-lg-145 service-section text-center text-lg-left c-gutter-0" id="service">
				<div class="container">
					<div class=" col-12 mb-50 text-center">
						<h4>Bizim<span class="text-gradient">Servislerimiz</span></h4>
						<p class="fs-20 color-dark">Araç Servis</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-4 col-xl-3">
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-tow-truck"></i>
								</div>
								<div class="media-body">
									<h6>
										Araç Çekimi
									</h6>
									<p>
										Yolda kalma durumunuzda aracınızı ücretsiz bir şekilde bulunduğu konumdan almaya geliyoruz.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-car"></i>
								</div>
								<div class="media-body">
									<h6>
										Sel Sigortası
									</h6>
									<p>
										Doğal afet sigortalarından birisidir.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-car-alt"></i>
								</div>
								<div class="media-body">
									<h6>
										Yangın Sigortası
									</h6>
									<p>
									Yangın sigortası temel olarak yangın felaketinin neden olduğu hasarları teminat altına alan bir sigorta ürünüdür. Bu sigorta ürünü başta yangın olmak üzere yıldırım düşmesi, infilak sonucu oluşan duman, buhar ya da hararet gibi durumların konut ya da iş yerlerinde neden olduğu hasarları karşılamaktadır.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xl-6">
							<img src="images/01.png" alt="">
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-breakdown"></i>
								</div>
								<div class="media-body">
									<h6>
										Dolu Sigortası
									</h6>
									<p>
									Doğal afet sigortalarından birisidir.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-accident"></i>
								</div>
								<div class="media-body">
									<h6>
										Kaza Sigortası
									</h6>
									<p>
									Kaza sigortaları, kapsamları sigorta şirketleri tarafından belirlenen ve sigortalıları beklenmedik hastane, bakım, nakil ve maluliyet masraflarına karşı güvence altına alan özel paketlerdir.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-motorcycle"></i>
								</div>
								<div class="media-body">
									<h6>
										Motorsiklet Çekimi
									</h6>
									<p>
									Yolda kalma durumunuzda motorsikletinizi ücretsiz bir şekilde bulunduğu konumdan almaya geliyoruz.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ds s-pt-55 s-pb-10 s-pt-lg-140 s-pb-lg-150 s-parallax testimonials-section" id="section_testimonials">
				<div id="particles-js"></div> <!-- Animated background -->
				<div class="container">
					<div class=" col-12 mb-50 text-center">
						<h4><span class="text-gradient">Yönetim Ekibi</span> Tanıtım</h4>
						<p class="fs-20 color-dark">Araç Servis</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<div class="testimonials-slider owl-carousel" data-autoplay="false" data-loop="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="true" data-dots="false">
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/logo_pp.jpg" alt="">
									</div>
									<div class="quote-mark">
										<img src="images/quote.png" alt="">
									</div>
									<p>
										<em class="big fw-400">
											Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim.
										</em>
									</p>
									<h6 class="quote-name fw-700">
										Batuhan Kocabıyık
									</h6>
									<p class="color-grey">
										Araç Servis Yöneticisi
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/logo_pp.jpg" alt="">
									</div>
									<div class="quote-mark">
										<img src="images/quote.png" alt="">
									</div>
									<p>
										<em class="big fw-400">
											Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim.
										</em>
									</p>
									<h6 class="quote-name fw-700">
										Batuhan Kocabıyık
									</h6>
									<p class="color-grey">
										Araç Servis Yöneticisi
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/logo_pp.jpg" alt="">
									</div>
									<div class="quote-mark">
										<img src="images/quote.png" alt="">
									</div>
									<p>
										<em class="big fw-400">
											Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim.
										</em>
									</p>
									<h6 class="quote-name fw-700">
										Batuhan Kocabıyık
									</h6>
									<p class="color-grey">
										Araç Servis Yöneticisi
									</p>
								</div>

							</div><!-- .testimonials-slider -->

						</div>
					</div>
				</div>
			</section>



			<section class="ls s-pt-60 s-pb-0 s-pt-md-55 s-pb-md-45 s-pt-lg-145 s-pb-lg-115 c-mb-55 c-mb-md-0 text-center text-md-left side-section">
				<div class="divider-5 d-none d-mb-block"></div>
				<div class="cover-image s-cover-left"></div><!-- half image background element -->
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="images/side-image01.jpg" alt="">
						</div>
						<div class="col-md-6 animate" data-animation="moveFromRight">
							<div class="item-content content-left-padding">
								<h3 class="special-heading">Araç Servis<span class="text-gradient">İşlemleri</span></h3>
								<p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren. Vis no intellegebat voluptatibus, vim an partem admodum copiosae, has ei mutat maluisset comprehensam.</p>
								<ul class="list1">
									<li>Güvenilir Ekspertiz</li>
									<li>Sıfır Yedek Parçalar</li>
									<li>Son Derece Özelleştirilebilir Modifikasyon</li>
									<li>Dynotest Hizmeti</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-3 s-pb-0 s-pt-md-55 s-pb-md-45 s-pt-lg-145 s-pb-lg-115 c-mb-55 c-mb-md-0 text-center text-md-left side-section" id="contacts">
				<div class="divider-5 d-none d-mb-block"></div>
				<div class="cover-image s-cover-right"></div><!-- half image background element -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 order-1 order-md-2">
							<img src="images/side-image02.jpg" alt="">
						</div>
						<div class="col-md-6 order-2 order-md-1 animate" data-animation="moveFromLeft">
							<div class="item-content content-right-padding">
								<h3 class="special-heading">Araç Temizlik<span class="text-gradient">Servisleri</span></h3>
								<p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren. Vis no intellegebat voluptatibus, vim an partem admodum copiosae, has ei mutat maluisset comprehensam.</p>
								<ul class="list1">
									<li>Doğa dostu ürünler kullanılır</li>
									<li>Araç boyası çizmeyen ürünler kullanılır</li>
									<li>Detaylı temizlik işlemi uygulanır</li>
									<li>Kaplama işlemi uygulanır</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-3 d-block d-mb-none"></div>
			</section>

			<section class="ls ms contact-section text-center text-md-left">
				<div class="row align-items-center c-gutter-0">
					<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
						<div class="animate page_map animated scaleAppear" data-animation="scaleAppear">
							<div class="marker">
								<div class="marker-address">Şabanoğlu, 5s Otomotiv, 1884. Sokak, Tekkeköy/Samsun</div>
								<div class="marker-title">Map Marker</div>
								<div class="marker-description">
									<p class="strong"><strong>Şabanoğlu, 5s Otomotiv, 1884. Sokak, Tekkeköy/Samsun</strong>.</p>
									<p>
										Bu bilgiler ile bizimle iletişime geçebilirsiniz.
									</p>
								</div>
								<img class="marker-icon" src="images/map_marker_icon.png" alt="">P
							</div>
							<!-- .marker -->
						</div>
						<!--.col-* -->
					</div>
					<div class="col-xl-3 col-md-6 col-10 animate" data-animation="moveFromRight">
						<div class="divider-55 d-md-none"></div>
						<div class="item-content content-left-padding">
							<h3 class="special-heading">Bizi<span class="text-gradient">Bul</span></h3>
							<p>Bu bilgiler ile bizimle iletişime geçebilirsiniz.</p>
							<h6 class="fw-700">Türkiye</h6>
							<div class="media side-icon-box">
								<div class="icon-styled color-main">
									<i class="fa fa-map-marker"></i>
								</div>
								<p class="media-body">Şabanoğlu, 5s Otomotiv, 1884. Sokak,<br> Tekkeköy/Samsun</p>
							</div>
							<div class="media side-icon-box">
								<div class="icon-styled color-main">
									<i class="fa fa-phone"></i>
								</div>

								<p class="media-body">+90 123 456 78 90</p>
							</div>
							<div class="media side-icon-box">
								<div class="icon-styled color-main fs-14">
									<i class="fa fa-envelope"></i>
								</div>
								<p class="media-body links-grey">
									<a href="mailto:">info@aracservis.com</a>
								</p>
							</div>
							<a href="mailto:info@aracservis.com" class="btn btn-small btn-outline-maincolor">İletişime Geç</a>
						</div>
						<div class="divider-60 d-md-none"></div>
					</div>
					<!--.col-* -->
				</div>
			</section>

			<section class="ls s-py-55 s-py-lg-75" id="partners">
				<div class="container-fluid">
					<div class="divider-3"></div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="owl-carousel partners-carousel" data-center="true" data-loop="true" data-responsive-lg="10" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="3">
								<a href="#">
									<img src="images/partners/01.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/02.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/03.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/04.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/05.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/06.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/07.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/08.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/09.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/10.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<a href="index.php" class="logo">
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
								<h3>Kısayollar</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Bize Ulaşın</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Blog</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Hakkımızda</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Servisler</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
							<div class="widget widget_services_links">
								<h3>Servisler</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Araç Bakımı</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Sigorta İşlemleri</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Lastik Parlatma</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>İç/Dış Temizlik</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
							<div class="widget widget_working_hours">
								<h3>Çalışma Saatlerimiz</h3>
								<ul>
									<li class="row">
										<div class="color-grey col-3">
											H.İ.
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">09.<sup>00</sup> ve - 18.<sup>00</sup></span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Cmt
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">09.<sup>00</sup> ve - 15.<sup>30</sup></span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Pzr
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">Kapalı</span>
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
							<p><a target="_blank" href="https://instagram.com/batuyovski">Batuhan Kocabıyık</a></p>
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


</html>