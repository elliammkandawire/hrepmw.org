

<!--Site Footer Start-->
<footer class="site-footer">
	<div class="site-footer-bg">
	</div>
	<div class="site-footer__top">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="footer-widget__column footer-widget__about">
						<div class="footer-widget__about-text-box">
							<img style="object-fit: cover; height: 200px;" src="<?php echo $company_data->logo_big ?>" alt="">
<!--							<p class="footer-widget__about-text">--><?php //echo $company_data->motto ?><!--</p>-->
						</div>
						<a href="<?php echo $company_data->facebook ?>" class="donate-btn footer-donate__btn"> <i class="fab fa-facebook"></i>
							Follow Us</a>
					</div>
				</div>
				<div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
					<div class="footer-widget__column footer-widget__links clearfix">
						<h3 class="footer-widget__title">Quick Links</h3>
						<ul class="footer-widget__links-list list-unstyled clearfix">
							<li><a href="<?php echo base_url() ?>about">Who we are</a></li>
							<li><a href="<?php echo base_url() ?>news">News</a></li>
							<li><a href="<?php echo base_url() ?>opportunities">Opportunities</a></li>
							<li><a href="<?php echo base_url() ?>contact">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
					<div class="footer-widget__column footer-widget__non-profit clearfix">
						<h3 class="footer-widget__title">Our Programs</h3>
						<ul class="footer-widget__non-profit-list list-unstyled clearfix">
							<?php foreach($programs as $program): ?>
								<li><a href="<?php echo base_url()."programs"."/".$program->slug ?>"><?php echo $program->title ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<!-- <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
					<div class="footer-widget__column footer-widget__non-profit clearfix">
						<h3 class="footer-widget__title">Non Profit</h3>
						<ul class="footer-widget__non-profit-list list-unstyled clearfix">
							<li><a href="differently-abled-kids.html">Differently Abled Kids</a></li>
							<li><a href="help-child-cancer.html">Help Child Cancer</a></li>
							<li><a href="clean-pure-water.html">Clean Pure Water</a></li>
							<li><a href="give-them-education.html">Give them Education</a></li>
							<li><a href="start-a-fundraising.html">Start a Fundraising</a></li>
						</ul>
					</div>
				</div> -->
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="footer-widget__column footer-widget__contact clearfix">
						<h3 class="footer-widget__title">Contact</h3>
						<ul class="list-unstyled footer-widget__contact-list">
							<li>
								<div class="icon">
									<span class="icon-email"></span>
								</div>
								<div class="text">
									<a href="mailto:<?php echo $company_data->email  ?>"><?php echo $company_data->email  ?></a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-telephone"></span>
								</div>
								<div class="text">
									<a href="tel:<?php echo $company_data->phone;  ?>"> <?php echo $company_data->phone  ?></a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-pin"></span>
								</div>
								<div class="text">
									<p><?php echo $company_data->postal_address  ?></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="site-footer__bottom-inner">
						<p class="site-footer__bottom-text">© Copyright <?php echo date("Y") ?> by <a href="#"><?php  echo $company_data->shortname ?></a>
						</p>
						<div class="site-footer__social">
							<a href="<?php echo $company_data->twitter ?>"><i class="fab fa-twitter"></i></a>
							<a href="<?php echo $company_data->facebook ?>"><i class="fab fa-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

		<div class="logo-box">
			<a href="<?php echo base_url() ?>" aria-label="logo image"><img src="<?php echo base_url() ?>assets/images/resources/<?php echo $company_data->logo ?>" alt=""></a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->

		<ul class="mobile-nav__contact list-unstyled">
			<li>
				<i class="fa fa-envelope"></i>
				<a href="mailto:<?php echo $company_data->email ?>"><?php echo $company_data->email ?></a>
			</li>
			<li>
				<i class="fa fa-phone-alt"></i>
				<a href="tel:<?php echo $company_data->phone ?>"><?php echo $company_data->phone ?></a>
			</li>
		</ul><!-- /.mobile-nav__contact -->
		<div class="mobile-nav__top">
			<div class="mobile-nav__social">
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-facebook-square"></a>
				<a href="#" class="fab fa-pinterest-p"></a>
				<a href="#" class="fab fa-instagram"></a>
			</div><!-- /.mobile-nav__social -->
		</div><!-- /.mobile-nav__top -->



	</div>
	<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
	<div class="search-popup__overlay search-toggler"></div>
	<!-- /.search-popup__overlay -->
	<div class="search-popup__content">
		<form action="#">
			<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
			<input type="text" id="search" placeholder="Search Here...">
			<button type="submit" aria-label="search submit" class="thm-btn">
				<i class="icon-magnifying-glass"></i>
			</button>
		</form>
	</div>
	<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="<?php echo base_url() ?>assets/vendors/jquery/jquery-3.6.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/wow/wow.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/vegas/vegas.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/timepicker/timePicker.js"></script>
<!-- template js -->
<script src="<?php echo base_url() ?>assets/js/pifoxen.js"></script>
</body>

</html>
