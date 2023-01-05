
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Contact</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->




	<!--Contact Page Start-->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5">
					<div class="contact-page__left">
						<div class="section-title text-left">
							<span class="section-title__tagline">Contact with us</span>
							<h2 class="section-title__title">Get in Touch With us</h2>
						</div>
						<p class="contact-page__text">Let's get intouch</p>
						<div class="contact-page__social">
							<a href="<?php echo $company_data->twitter  ?>"><i class="fab fa-twitter"></i></a>
							<a href="<?php echo $company_data->facebook  ?>"><i class="fab fa-facebook"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-7">
					<div class="contact-page__right">
						<form action="#" class="comment-one__form contact-form-validated" novalidate="novalidate">
							<div class="row">
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Your Name" name="name">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="email" placeholder="Email Address" name="email">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Phone Number" name="phone">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<select name="subject">
											<option value="">Subject</option>
											<option value="query about donation">Query about Donation</option>
											<option value="want be a volunteer">Want be a volunteer</option>
										</select><!-- /# -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="comment-form__input-box text-message-box">
										<textarea name="message" placeholder="Write a Comment"></textarea>
									</div>
									<div class="comment-form__btn-box">
										<button type="submit" class="thm-btn comment-form__btn">Send us a
											message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Page End-->


	<!--Contact Page Start-->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<div class="contact-page__left">
<!--						<h3 class="footer-widget__title">Follow us on Twitter</h3>-->
						<div class="container">
							<a class="twitter-timeline" data-width="100%" data-height="400" href="<?php echo $company_data->twitter ?>">Tweets by HREP</a>
							<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="contact-page__right">
<!--						<iframe frameBorder="0" src="https://www.facebook.com/plugins/page.php?href=--><?php //echo $company_data->facebook;  ?><!--=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"-->
<!--								width="340" height="100px"-->
<!--								style="border:none;overflow:hidden" scrolling="no" frameborder="0"-->
<!--								allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>-->


						<iframe src="https://www.facebook.com/plugins/page.php?href=<?php echo $company_data->facebook ?>&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
								width="100%" height="400"
								style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Page End-->


	<!--Contact Info Start-->
	<section class="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<!--Contact Info Single-->
					<div class="contact-info__single">
						<h4 class="contact-info__title">What we believe in</h4>
						<p class="contact-info__text"><?php echo ucwords($company_data->motto)  ?></p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<!--Contact Info Single-->
					<div class="contact-info__single contact-info__single-2">
						<h4 class="contact-info__title">Address</h4>
						<p class="contact-info__text"><?php echo $company_data->postal_address  ?></p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<!--Contact Info Single-->
					<div class="contact-info__single contact-info__single-3">
						<h4 class="contact-info__title">Contact</h4>
						<p class="contact-info__email-phone">
							<a href="mailto:<?php echo $company_data->email  ?>" class="contact-info__email"><?php echo $company_data->email  ?></a>
							<a href="tel:<?php echo $company_data->phone  ?>" class="contact-info__phone"><?php echo $company_data->phone  ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Info End-->


	<!--Contact page Google Map Start-->
	<section class="contact-page-google-map">
		<?php echo $company_data->map_src ?>
	</section>
	<!--Google Map End-->
