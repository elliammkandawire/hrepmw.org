

	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Our Programs</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Programs</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--FAQs Page Start-->
	<section class="paq-page">
		<div class="container">
			<div class="row">
				<?php foreach ($programs as $program): ?>
				<div class="col-xl-6 col-lg-6">
					<div class="faq-page__single">
						<div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">


							<div class="accrodion active">
								<div class="accrodion-title">
									<a href="<?php echo base_url()."programs/".$program->slug ?>"><h4><?php echo ucwords($program->title) ?></h4></a>
								</div>
								<div class="accrodion-content">
									<div class="inner">
										<p>
											<?php echo substr($program->content,0,200) ?>...
											<a href="<?php echo base_url()."programs/".$program->slug ?>" class="feature-one__btn">More</a>
										</p>
									</div><!-- /.inner -->
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
