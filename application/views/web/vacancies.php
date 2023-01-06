
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Vacancies</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url()  ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">vacancies</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<section class="testimonials-page">
		<div class="container">
			<div class="row testimonials__row">

				<?php foreach ($vacancies as $vacancy): ?>
				<div class="col-lg-4">
					<!--Testimonial Two Single-->
					<div class="testimonial-two__single">
						<div class="testimonial-two__content">
							<div class="testimonial-two__quote">
								<span class="fa fa-tasks"></span>
							</div>
							<a href="<?php echo base_url()."vacancies/".$vacancy->slug ?>"><p class="testimonial-two__client-title"><?php  echo strtoupper($vacancy->title) ?></p></a>
							<br>
							<p class="testimonial-two__text"><?php echo substr($vacancy->content,0,100); ?>...</p>
							<a href="<?php echo base_url()."vacancies/".$vacancy->slug ?>" class="feature-one__btn">More</a>
						</div>
					</div>
				</div><!-- /.col-lg-4 -->
				<?php endforeach; ?>

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.testimonials-page -->


