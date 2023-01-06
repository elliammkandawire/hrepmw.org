
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Gallery</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Gallery Page Start-->
	<section class="gallery-page">
		<div class="container">
			<div class="row">

				<?php foreach ($gallery as $picture): ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="two-section__gallery-single">
						<div class="two-section__gallery-img-inner">
							<img style="object-fit: cover; height: 400px;" src="<?php echo $picture->picture ?>" alt="">
						</div>
						<div class="two-section__gallery-img-overly">
							<div class="two-section__gallery-icon-bg">
							</div>
							<a class="img-popup" href="<?php echo $picture->picture ?>">
								<span class="icon-right-arrow"></span>
							</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
	<!--Gallery Page End-->
