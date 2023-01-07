
<?php  $data=$company_data; ?>
        <div class="col-lg-10"><!--start col-lg-4-->

			<?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
				<?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
					<div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Feedback!</strong> <?php echo $message ?>
					</div>
				<?php $_SESSION['message']=null; } ?>

			 <div class="w3-card-16">
					    <header class="w3-container main-color">
							<h5 style="color: whitesmoke">Company Details</h5>
						</header>
						<br>
					<div id="container" class="row" style="width: 100%;">
                           <br>
							<div class="gallery w3-container" style="width: 50%;">
							  <a  href="home/update_company_details">
							    <img src="<?php echo $data->logo; ?>" alt="" style="object-fit: cover; height: 300px;" >
							  </a>
							  <div class="desc"><?php echo $data->shortname;  ?></div>
							  <div class="container">
                                   <a href="home/update_company_details">Edit About Company</a>
							  	<br>
							  </div>
							 </div>
						<br>
					</div>
					<br>
			</div>		
		</div><!--end col-lg-4-->


	   </div> 
        </div>
	</div>
	</div>

<div class="modal fade" id="edit_company_policy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Company Environment Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="reflesh_home('dashboard')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo base_url(); ?>index.php/update_company_env_policy" enctype="multipart/form-data">
        <div class="row">
        	<input type="hidden" class="form-control" name="company_id" id="company_identify" required="">
		          <input type="hidden" class="form-control" id="url" value="<?php echo base_url(); ?>">
        	 <div class="col-lg-12">
		           <div class="form-group">
		            <label for="message-text" class="col-form-label">Company Environment Policy:</label>
		            <textarea class="form-control summernote" id="company_environmental_policy" rows="15" name="company_environmental_policy" required="" style="white-space: pre-wrap;"></textarea>
		          </div>
        	 </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reflesh_home('dashboard')">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
       </form>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo base_url(); ?>index.php/edit_password" enctype="multipart/form-data">
        <div class="row">
        	 <div class="col-lg-12">
		          <div class="form-group">
		            <input type="password" name="new_password" class="form-control" placeholder="New Password">
		            <br>
		            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
		          </div>
        	 </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
       </form>
    </div>
  </div>
</div>




