	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo $news_details->picture ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<h2>News Details</h2>
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li><a href="<?php echo base_url() ?>news">News</a></li>
					<li><span>/</span></li>
					<li class="active">News Details</li>
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
							$timestamp = strtotime($news_details->date);
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
							<h3 class="blog-details__title"><?php echo $news_details->title ?>
							</h3>
							<p class="blog-details__text-1"><?php echo $news_details->content ?></p>

						</div>
					</div>
                    <hr>
					<div class="comment-form">
						<h3 class="comment-form__title">Leave a Comment</h3>
						<form action="#" class="comment-one__form contact-form-validated" novalidate="novalidate">
							<div class="row">
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Your Name" name="name">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="comment-form__input-box">
										<input type="email" placeholder="Email Address" name="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="comment-form__input-box text-message-box">
										<textarea name="message" placeholder="Write a Comment"></textarea>
									</div>
									<div class="comment-form__btn-box">
										<button type="submit" class="thm-btn comment-form__btn">submit
											comment</button>
									</div>
								</div>
							</div>
						</form>
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

								<?php foreach ($latest_news as $latest): ?>
								<li>
									<div class="sidebar__post-image">
										<img style="object-fit: cover; height: 60px;" src="<?php echo $latest->picture ?>" alt="">
									</div>
									<div class="sidebar__post-content">
										<h3>
<!--											<span class="sidebar__post-content-meta"><i class="far fa-user-circle"></i> Admin</span>-->
											<a href="<?php echo base_url()."news-details/".$latest->slug ?>"><?php echo $latest->title ?></a>
										</h3>
									</div>
								</li>
								<?php endforeach; ?>

							</ul>
						</div>
						<div class="sidebar__single sidebar__tags">
							<h3 class="sidebar__title">Tags</h3>
							<div class="sidebar__tags-list">
								<?php  $tags=explode(",",$news_details->tags)  ?>
								<?php foreach ($tags as $tag): ?>
							     	<a href="#"><?php  echo $tag ?></a>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Blog Details End-->
