<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $company_data->shortname ?> - <?php echo ucwords($company_data->motto)  ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<? echo base_url() ?>assets/images/favicons/fav.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/images/favicons/fav.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicons/fav.png">
    <link rel="manifest" href="<? echo base_url() ?>assets/images/favicons/site.webmanifest">
    <meta name="description" content="<?php echo $company_data->shortname ?> - <?php echo $company_data->fullname  ?>">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/pifoxen-icons/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/timepicker/timePicker.css">

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/pifoxen.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/pifoxen-responsive.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo base_url() ?>assets/images/loader.png" alt="">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
			<div class="main-header__top">
				<div class="main-header__top-left">
					<p class="main-header__top-text">Welcome to <?php echo $company_data->fullname ?></p>
					<div class="main-header__top-social">
						<a href="<?php echo $company_data->twitter ?>"><i class="fab fa-twitter"></i></a>
						<a  href="<?php echo $company_data->facebook ?>"><i class="fab fa-facebook"></i></a>
					</div>
				</div>
				<div class="main-header__top-right">
					<ul class="list-unstyled main-header__top-address">
						<li>
							<div class="icon">
								<span class="icon-pin"></span>
							</div>
							<div class="text">
								<p><?php echo $company_data->location ?></p>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="icon-email"></span>
							</div>
							<div class="text">
								<p><a href="mailto:<?php echo $company_data->email ?>"><?php echo $company_data->email ?></a></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="<?php echo base_url() ?>"><img style="object-fit: cover; height: 50px"  src="<?php echo $company_data->logo ?>" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Call Anytime</p>
                                <h5><a href="tel:<?php  echo $company_data->phone ?>"><?php  echo $company_data->phone ?></a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="megamenu">
                                <a href="<?php echo base_url() ?>">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Who We Are</a>
                                <ul>
                                    <li><a href="<?php echo base_url() ?>about">About <?php echo $company_data->shortname ?></a></li>
                                    <li>
                                        <a href="<?php echo base_url() ?>team">Our Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="<?php echo base_url() ?>program">What We Do</a>
                                <ul>
									<?php foreach($programs as $program): ?>
                                      <li><a href="<?php echo base_url()."programs/".$program->slug ?>"><?php echo ucwords($program->title)  ?></a></li>
									<?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Media Centre</a>
                                <ul>
                                    <li class="dropdown">
                                        <a href="<?php echo base_url() ?>events">Global Health Events</a>
                                    </li>
                                    <li><a href="<?php echo base_url() ?>announcements">Announcements</a></li>
                                    <li><a href="<?php echo base_url() ?>downloads">Documentation</a></li>
                                    <li><a href="<?php echo base_url() ?>news">Blog</a></li>
                                    <li><a href="<?php echo base_url() ?>gallery">Gallery</a></li>
<!--                                    <li><a href="--><?php // echo base_url() ?><!--">Publications</a></li>-->
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() ?>vacancies">Careers</a></li>
                            <li><a href="<?php echo base_url() ?>partners">Partners</a></li>
                            <li><a href="<?php echo base_url() ?>contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__search-cat">
<!--                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>-->
                            <a href="login.html" class="main-menu-wrapper__cart icon-avatar mini-cart__toggler"></a>
                        </div>
                        <a href="donate-now.html" class="donate-btn main-menu-wrapper__btn"> <i class="fab fa-facebook"></i>
                            Follow</a>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
		<!-- template js -->

