 <!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Global Health Days</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Global Health Days</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Events Page Start-->
	<section class="events-page">
		<div class="container">
			<div class="row">
				<?php foreach ($events as $event): ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<!--Events Single-->
					<div class="events__single">
						<div class="events__img">
							<img style="object-fit: cover; height: 250px;" src="<?php echo $event->picture ?>" alt="">
							<div class="events__date">
								<?php
								$timestamp = strtotime($event->date);
								$day = date('d', $timestamp);
								$month = date('M', $timestamp);
								?>
								<p><?php echo $day."<br>".$month ?></p>
							</div>
						</div>
						<div class="events__content">
							<h3 class="events__title"><a href="<?php echo base_url()."event-details/".$event->slug ?>"><?php echo ucwords($event->title) ?></a></h3>
<!--							<ul class="list-unstyled events__meta">-->
<!--								<li><i class="far fa-clock"></i>--><?php //echo $event->time ?><!--</li>-->
<!--								<li><i class="fas fa-map-marker-alt"></i>--><?php //echo $event->place ?><!--</li>-->
<!--							</ul>-->
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
	<!--Events Page End-->


