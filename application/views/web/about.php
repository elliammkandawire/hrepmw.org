
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $company_data->about_picture ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>About</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">About</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--About Page Start-->
	<section class="about-page">
		<div class="container">
			<div class="row">
<!--				<div class="col-xl-12">-->
<!--					<div class="about-page__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">-->
<!--						<div class="about-page__img">-->
<!--							<img style="object-fit: cover; height: 300px;" src="--><?php //echo base_url() ?><!--assets/images/resources/--><?php //echo $company_data->about_picture ?><!--" alt="">-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
				<div class="col-xl-12">
					<div class="about-page__right">
						<div class="section-title text-left">
							<span class="section-title__tagline">Welcome to <?php echo $company_data->shortname ?></span>
							<h2 class="section-title__title"><?php echo ucwords($company_data->motto) ?></h2>
						</div>
						<p class="about-page__text"><?php echo $company_data->background ?></p>
<!--						<ul class="about-one__points list-unstyled">-->
<!--							<li>-->
<!--								<div class="icon">-->
<!--									<span class="icon-confirmation"></span>-->
<!--								</div>-->
<!--								<div class="text">-->
<!--									<p>Our Mission</p>-->
<!--								</div>-->
<!--							</li>-->
<!--							<li>-->
<!--								<div class="icon">-->
<!--									<span class="icon-confirmation"></span>-->
<!--								</div>-->
<!--								<div class="text">-->
<!--									<p>Our Vision</p>-->
<!--								</div>-->
<!--							</li>-->
<!--						</ul>-->
<!--						<ul class="about-one__points-content list-unstyled">-->
<!--							<li>-->
<!--								<p class="about-one__points-text">Lorem ipsum dolor sit ame ed consectetur nod.</p>-->
<!--							</li>-->
<!--							<li>-->
<!--								<p class="about-one__points-text">Lorem ipsum dolor sit ame ed consectetur nod.</p>-->
<!--							</li>-->
<!--						</ul>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--About Page End-->




	<!--Contact Info Start-->
	<section class="contact-info">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<!--Contact Info Single-->
					<div class="contact-info__single">
						<h4 class="contact-info__title">Our Mission</h4>
						<p class="contact-info__text"><?php echo $company_data->mission  ?></p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<!--Contact Info Single-->
					<div class="contact-info__single contact-info__single-2">
						<h4 class="contact-info__title">Our Goal</h4>
						<p class="contact-info__text"><?php echo $company_data->goal  ?></p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<!--Contact Info Single-->
					<div class="contact-info__single contact-info__single-3">
						<h4 class="contact-info__title">Our Vision</h4>
						<p class="contact-info__text"><?php echo $company_data->vision  ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Info End-->

	<!--Volunteers Page Start-->
	<section class="volunteers-one">
		<div class="container">
			<div class="row">

				<?php foreach ($staff as $staff_member): ?>
					<div class="col-xl-4 col-lg-4 col-md-6">
						<!--Volunteers One Single-->
						<div class="volunteers-one__single">
							<div class="volunteers-one__img">
								<img style="object-fit: cover; height: 400px;" src="<?php echo $staff_member->picture ?>" alt="">
								<div class="volunteers-one__social">
									<a href="<?php  echo $staff_member->twitter ?>"><i class="fab fa-twitter"></i></a>
									<a href="<?php  echo $staff_member->facebook ?>"><i class="fab fa-facebook"></i></a>
								</div>
							</div>
							<div class="volunteers-one__content">
								<h4 class="volunteers-one__name"><?php  echo $staff_member->name ?></h4>
								<p class="volunteers-one__title"><?php  echo $staff_member->position ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--Volunteers Page End-->


	<!--Brand One Start-->
	<section class="brand-one">
		<div class="container">
			<div class="section-title text-left">
				<span class="section-title__tagline">HREP</span>
				<h2 class="section-title__title">Partners</h2>
			</div>
			<div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
				<div class="swiper-wrapper">
					<?php foreach ($partners as $partner): ?>
					<div class="swiper-slide">
						<img style="object-fit: cover; height: 100px" src="<?php echo base_url() ?>assets/images/brand/<?php echo $partner->picture ?>" alt="">
					</div><!-- /.swiper-slide -->
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!--Brand One End-->

