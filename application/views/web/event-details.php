

	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $event_details->picture ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Event Details</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li><a href="<?php echo base_url() ?>events">Events</a></li>
					<li><span>/</span></li>
					<li class="active">Event Details</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Event Details Start-->
	<section class="event-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="event-details__img">
<!--						<img style="object-fit: cover; height: 500px;" src="--><?php //echo $event_details->picture ?><!--" alt="">-->
						<div class="events__date">
							<?php
							$timestamp = strtotime($event_details->date);
							$day = date('d', $timestamp);
							$month = date('M', $timestamp);
							?>
							<p><?php echo $day." ".$month ?></p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="event-details__bottom">
				<div class="row">
					<div class="col-xl-8 col-lg-7">
						<div class="event-details__bottom-left">
							<div class="event-details__bottom-content">
								<h3 class="event-details__title"><?php echo ucwords($event_details->title) ?></h3>
								<p class="event-details__text-1">
									<?php echo $event_details->content ?>
								</p>
								<p class="event-details__text-3"></p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="sidebar">
							<div class="sidebar__single sidebar__post">
								<h3 class="sidebar__title">Global Days</h3>
								<ul class="sidebar__post-list list-unstyled">

									<?php foreach ($events_latest as $latest): ?>
										<li>
											<div class="sidebar__post-image">
												<img style="object-fit: cover; height: 60px;" src="<?php echo $latest->picture ?>" alt="">
											</div>
											<div class="sidebar__post-content">
												<h3>
													<a href="<?php echo base_url()."event-details/".$latest->slug ?>"><?php echo $latest->title ?></a>
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
		</div>
	</section>
	<!--Event Details End-->
