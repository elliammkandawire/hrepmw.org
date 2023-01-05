

	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $header->image_url  ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>Latest News</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">News</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Blog Page Start-->
	<section class="blog-page">
		<div class="container">
			<div class="row">


				<?php foreach ($news as $article): ?>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<!--Blog One single-->
					<div class="blog-one__single">
						<div class="blog-one__img">
							<img style="object-fit: cover; height: 250px" src="<?php echo $article["picture"] ?>" alt="">
							<div class="blog-one__date">
								<?php
								   $timestamp = strtotime($article["date"]);
								   $day = date('d', $timestamp);
								   $month = date('M', $timestamp);
								?>
								<p><?php echo $day." ".$month ?></p>
							</div>
							<a href="<?php echo base_url()."news-details/".$article["slug"] ?>">
								<span class="news-one__plus"></span>
							</a>
						</div>
						<div class="blog-one__content">
							<h3 class="blog-one__title">
								<a href="<?php echo base_url()."news-details/".$article["slug"] ?>"><?php echo $article["title"] ?></a>
							</h3>
							<p class="blog-one__text"><?php echo substr($article["content"],0,50) ?>...
							</p>
							<div class="blog-one__bottom">
								<a href="<?php echo base_url()."news-details/".$article["slug"] ?>" class="blog-one__btn">Read More</a>
								<a href="<?php echo base_url()."news-details/".$article["slug"] ?>" class="blog-one__arrow"><span class="icon-right-arrow"></span></a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>


			</div>
		</div>
	</section>
	<!--Blog Page End-->

