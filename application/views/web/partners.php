

	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Our Partners</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Partners</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Donations List Start-->
	<section class="donations-list">
		<div class="container">
			<div class="donations-list__inner">



				<?php foreach ($partners as $partner): ?>
				<!--Donations List Single-->
				<div class="donations-list__single">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
<!--							class="donations-list__img"-->
							<div>
								<img style="object-fit: cover; height: 200px;" src="<?php echo $partner->picture ?>" alt="">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="donations-list__right">
								<div class="donations-list__content">
									<div class="donations-list__category">
										<p><?php echo $partner->tag ?></p>
									</div>
									<h3 class="donations-list__title"><a href="<?php echo $partner->website ?>"><?php echo $partner->name ?></a></h3>
									<p class="donations-list__text"><?php echo $partner->content ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>


			</div>
		</div>
	</section>
	<!--Donations List End-->
