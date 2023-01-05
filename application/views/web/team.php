
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Our Team</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Team</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

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

