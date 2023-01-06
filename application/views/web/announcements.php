

	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Upcoming Events</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Events</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Events Page Start-->
	<section class="events-page">
		<div class="container">
			<div class="row">

				<?php foreach ($announcements as $announcement): ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<!--Events Single-->
					<div class="events__single">
						<div class="events__img">
							<img style="object-fit: cover; height: 300px" src="<?php echo $announcement->picture ?>" alt="">
							<div class="events__date">
								<?php
								$timestamp = strtotime($announcement->date);
								$day = date('d', $timestamp);
								$month = date('M', $timestamp);
								?>
								<p><?php echo $day." ".$month ?></p>
							</div>
						</div>
						<div class="events__content">
							<h3 class="events__title"><a href="<?php echo base_url()."announcement/".$announcement->slug ?>"><?php echo $announcement->title  ?></a></h3>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
	<!--Events Page End-->
