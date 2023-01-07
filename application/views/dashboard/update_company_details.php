<?php $data=$company_data; echo form_open_multipart('update_company');?>
	<div class="row">
		<div class="col-lg-4">
			<input type="text" name="slug" value="<?php echo $data->slug ?>" style="display: none">
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Company Short Name:</label>
				<input type="text" class="form-control" value="<?php echo $data->shortname ?>" name="shortname" required="" placeholder="Company Short Name">
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Company Name:</label>
				<input type="text" class="form-control" value="<?php echo $data->fullname ?>" name="fullname" required="" placeholder="Company Full Name">
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Company Motto:</label>
				<input type="text" class="form-control" value="<?php echo $data->motto ?>" name="motto" required="" placeholder="Company Motto">
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">You Tube:</label>
				<input type="text" class="form-control" value="<?php echo $data->youtube ?>" name="youtube" required="" placeholder="Youtube Link">
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Physical Location</label>
				<input type="text" class="form-control" value="<?php echo $data->location ?>" name="location" placeholder="Company Location" required="">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Email</label>
				<input type="email" class="form-control" value="<?php echo $data->email ?>" name="email" placeholder="Company Email" required="">
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Phone</label>
				<input type="tel" class="form-control" value="<?php echo $data->phone ?>" name="phone" placeholder="Ground Phone Number" required="">
			</div>


			<div class="form-group">
				<label for="message-text" class="col-form-label">Facebook</label>
				<input type="text" class="form-control" value="<?php echo $data->facebook ?>" name="facebook" placeholder="Example: https://www.facebook.com/">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Instagram</label>
				<input type="text" class="form-control" value="<?php echo $data->instagram ?>" name="instagram" placeholder="Example: https://www.instagram.com/"">
			</div>

<!--			<div class="form-group">-->
<!--				<label for="message-text" class="col-form-label">Linkedin</label>-->
<!--				<input type="text" class="form-control" value="--><?php //echo $data->linkedin ?><!--" name="linkedin" placeholder="Example: https://www.linkedin.com/">-->
<!--			</div>-->
			<div class="form-group">
				<label for="message-text" class="col-form-label">Twitter</label>
				<input type="text" class="form-control" value="<?php echo $data->twitter ?>" name="twitter" placeholder="example: https://www.twitter.com/">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Postal Address:</label>
				<textarea class="form-control summernote"  name="postal_address" required="" style="white-space: pre-wrap;" rows="7"><?php echo $data->postal_address ?></textarea>
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Map</label>
				<textarea class="form-control" name="map_src" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->map_src ?></textarea>
			</div>


			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Logo:</label>
				<input type="file" class="form-control" id="logo" name="logo" accept=".jpg, .png, .jpeg, .gif" onchange="readURL(this,'company_logo')">
				<input type="hidden" value="<?php echo $data->logo ?>" name="current_logo">
				<br>
				<div>
					<img src="<?php echo $data->logo ?>" alt="" style="object-fit: cover; height: 200px;" id="company_logo">
				</div>
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">About Picture:</label>
				<input type="file" class="form-control" name="about_picture" accept=".jpg, .png, .jpeg, .gif" onchange="readURL(this,'about_picture')">
				<input type="hidden" value="<?php echo $data->about_picture ?>" name="current_about_picture">
				<br>
				<div>
					<img src="<?php echo $data->about_picture ?>" alt="" style="object-fit: cover; height: 300px;" id="about_picture">
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="form-group">
				<label for="message-text" class="col-form-label">Feature Video(Youtube Link only)</label>
				<textarea class="form-control" name="preview_video" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->preview_video ?></textarea>
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Home Page About Picture:</label>
				<input type="file" class="form-control" name="home_about_picture" accept=".jpg, .png, .jpeg, .gif" onchange="readURL(this,'home_about_picture')">
				<input type="hidden" value="<?php echo $data->home_about_picture ?>" name="current_home_about_picture">
				<br>
				<div>
					<img src="<?php echo $data->home_about_picture ?>" alt="" style="object-fit: cover; height: 300px;" id="home_about_picture">
				</div>
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Vision:</label>
				<textarea class="form-control summernote" name="vision" style="white-space: pre-wrap;" rows="5"><?php echo $data->vision ?></textarea>
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Mission</label>
				<textarea class="form-control summernote" name="mission" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->mission ?></textarea>
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Goal</label>
				<textarea class="form-control summernote" name="goal" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->goal ?></textarea>
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Brief History</label>
				<textarea class="form-control summernote" name="short_aboutus" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->short_aboutus ?></textarea>
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Full Background</label>
				<textarea class="form-control summernote" name="background" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->background ?></textarea>
			</div>
		   </div>
		 </div>
	   </div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>
<?php echo form_close(); ?>
