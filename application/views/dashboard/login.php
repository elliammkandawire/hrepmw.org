


	<!--Contact Page Start-->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="section-title text-center">
					<span class="section-title__tagline">Find the wellbeing</span>
					<h2 class="section-title__title">Login to account</h2>
				</div>
				<div class="col-xl-12">
					<form action="<?php echo base_url() ?>auth" method="post" class=" comment-one__form comment-one__login-form">
						<div class="row">
							<div class="col-xl-12">
								<div class="comment-form__input-box">
									<input type="email" placeholder="Email Address" name="email">
								</div>
							</div>
							<div class="col-xl-12">
								<div class="comment-form__input-box">
									<input type="password" placeholder="Enter Password" name="password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="comment-form__btn-box text-center">
									<button type="submit" class="thm-btn comment-form__btn">Login now</button>
								</div>
							</div>

							<div class="col-xl-12">
								<?php
								if($this->session->flashdata('error')){ ?>
									<div class="alert alert-danger text-center" style="margin-top:20px;">
										<?php echo $this->session->flashdata('error'); ?>
									</div>
								<?php }  ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Page End-->


