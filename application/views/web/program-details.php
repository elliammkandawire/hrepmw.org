<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg" style="background-image: url(<?php echo $program_details->image  ?>)">
	</div>
	<div class="container">
		<div class="page-header__inner">
			<h2>Program Details</h2>
			<ul class="thm-breadcrumb list-unstyled">
				<li><a href="<?php echo base_url() ?>">Home</a></li>
				<li><span>/</span></li>
				<li><a href="<?php echo base_url() ?>program">Programs</a></li>
				<li><span>/</span></li>
				<li class="active">Program Details</li>
			</ul>
		</div>
	</div>
</section>
<!--Page Header End-->

<!--Blog Details Start-->
<section class="blog-details">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="blog-details__left">
					<div class="blog-details__content">
						<ul class="list-unstyled blog-details__meta">
<!--							<li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>-->
						</ul>
						<h3 class="blog-details__title"><?php echo $program_details->title ?>
						</h3>
						<p class="blog-details__text-1"><?php echo $program_details->content ?></p>

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
						<h3 class="sidebar__title">Our Programs</h3>
						<ul class="sidebar__post-list list-unstyled">

							<?php foreach ($programs as $program): ?>
								<li>
<!--									<div class="sidebar__post-image">-->
<!--										<img style="object-fit: cover; height: 60px;" src="--><?php //echo $latest->picture ?><!--" alt="">-->
<!--									</div>-->
									<div class="sidebar__post-content">
										<h3>
<!--											<span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> Admin</span>-->
											<a href="<?php echo base_url()."programs/".$program->slug ?>"><?php echo $program->title ?></a>
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
