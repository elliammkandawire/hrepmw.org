

<div class="col-lg-9"><!--start col-lg-4-->
    <div class="w3-card-16">

        <?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
            <?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
            <div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Feedback!</strong> <?php echo $message ?>
            </div>
            <?php $_SESSION['message']=null; } ?>
        <header class="w3-container main-color">
            <h5 style="color: whitesmoke">ALL SLIDERS</h5>
			<button class="btn btn-success" data-toggle="modal" data-target="#add" onclick="add_summary_note()" data-whatever="@mdo"><i class="fa fa-plus"></i> Add</button>
		</header>
    </div>
    <div id="container" style="width: 100%;">
        <?php foreach($data as $item): ?>
            <div class="gallery w3-container">
                <a target="_blank" href="<?php echo $item->image; ?>">
                    <img src="<?php echo $item->image; ?>" alt="" style="object-fit: cover; height: 200px;" >
                </a>
                <div class="desc"><?php echo $item->description;  ?></div>
                <div class="container">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit" data-whatever="@mdo" onclick="edit_slider('<?php echo $item->slug; ?>')"><i class="fa fa-edit"></i></button>
					<button class="btn btn-warning btn-sm" onclick="delete_('<?php echo $item->slug; ?>','<?php echo $item->title; ?>','Confirm deleting Slider with title ','slider/delete')"><i class="fa fa-trash"></i></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div><!--end col-lg-4-->


</div>
</div>
</div>
</div>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<?php echo form_open_multipart('slider/add');?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" style="display: none">
                                <label for="message-text" class="col-form-label">Title</label>
                                <input  type="text" class="form-control" name="title">
                            </div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">Position</label>
								<input  type="text" class="form-control" name="position">
							</div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Details</label>
                                <textarea class="form-control" rows="5" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Slider Artwork:</label>
                                <input type="file" class="form-control" name="picture" accept=".jpg, .png, .jpeg, .gif" required="" onchange="readURL(this,'picture')">
                            </div>
                            <div>
                                <img src="#" alt="" style="object-fit: cover; height: 200px; width: 100%;" id="picture">
                            </div>
                            <br>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
			<?php echo form_close(); ?>
        </div>
    </div>
</div>


<?php $uri = $_SERVER['REQUEST_URI']; ?>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 50%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="update_slider" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" class="form-control" name="slug" id="slug" required="">
                            <input type="hidden" class="form-control" id="url"  value="<?php echo base_url(); ?>">

                            <div class="form-group" style="display: none">
                                <label for="message-text" class="col-form-label">Title</label>
                                <input  type="text" class="form-control" name="title" id="title">
                            </div>

							<div class="form-group">
								<label for="message-text" class="col-form-label">Position</label>
								<input  type="text" class="form-control" name="position" id="position">
							</div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Details</label>
                                <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Picture:</label>
                                <input type="file" class="form-control" name="picture" accept=".jpg, .png, .jpeg, .gif"  onchange="readURL(this,'picture_edit')">
                                <input type="hidden" id="current_picture" name="current_picture">
                            </div>

                            <div>
                                <img src="#" alt="" style="object-fit: cover; height: 200px; width: 50%;" id="picture_edit">
                            </div>
                            <br>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reflesh('news_admin')">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>






