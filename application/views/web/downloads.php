    <!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Downloads</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Downloads</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--FAQs Page Start-->
	<section class="paq-page">
		<div class="container">
			<div class="row">
				<?php foreach ($downloads as $download): ?>
				<div class="col-xl-6 col-lg-6">
					<div class="faq-page__single">
						<div class="alert alert-danger" role="alert">
							<div class="row">
								<div class="col-lg-11">
									<i class="fa fa-file-excel"> <?php echo $download->name ?></i>
								</div>
								<div class="col-lg-1">
                                   <a target="_blank" href="<?php echo $download->url ?>"><i class="fa fa-download"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
	<!--FAQs Page End-->

