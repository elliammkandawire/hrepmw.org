
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $company_data->about_picture ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Vacancy Details</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url()  ?>">Home</a></li>
					<li><span>/</span></li>
					<li><a href="<?php echo base_url()  ?>vacancies">Vacancies</a></li>
					<li><span>/</span></li>
					<li class="active">Vacancy</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Blog Details Start-->
	<section class="blog-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="event-details__img">
						<!--						<img style="object-fit: cover; height: 500px;" src="--><?php //echo $event_details->picture ?><!--" alt="">-->
						<div class="events__date">
							<?php
							$timestamp = strtotime($vacancies_details->date);
							$day = date('d', $timestamp);
							$month = date('M', $timestamp);
							?>
							<p><?php echo $day." ".$month ?></p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="blog-details__left">
						<div class="blog-details__content">
							<h3 class="blog-details__title"><?php echo $vacancies_details->title  ?>
							</h3>
							<p class="blog-details__text-1">
								<?php echo $vacancies_details->content ?>
							</p>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-lg-5">
					<div class="sidebar">
						<div class="sidebar__single sidebar__search">
							<form action="#" class="sidebar__search-form">
								<input type="search" placeholder="Search here">
								<button type="submit"><i class="icon-magnifying-glass"></i></button>
							</form>
						</div>
						<div class="sidebar__single sidebar__post">
							<h3 class="sidebar__title">Latest Posts</h3>
							<ul class="sidebar__post-list list-unstyled">
								<?php foreach ($random_vacancies as $vacancy): ?>
								<li>
									<div class="sidebar__post-content">
										<h3>
											<a href="<?php echo base_url()."vacancies/".$vacancy->slug ?>"><?php echo $vacancies_details->title  ?></a>
										</h3>
									</div>
								</li>
								<?php endforeach; ?>

							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Blog Details End-->
