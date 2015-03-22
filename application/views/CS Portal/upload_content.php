<div class="container">
	<div class="col-md-5">
	<?php echo form_open_multipart('course_repository/uploadfile'); ?>
	<div class="form-group">
      <label for="upload_title">Title</label>
      <input type="text" class="form-control" id="upload_title" name="upload_title" required>
   </div>
   <div class="form-group">
      <label for="uploadfile">Select File</label>
      <input type="file" name="userfile" required/>
      <p class="help-block">Should not be more than 20MB</p>
   </div>
   <div class="form-group">
      <label for="upload_tags">Tags</label>
      <input type="text" class="form-control" id="upload_tags" name="upload_tags" required>
      <p class="help-block">Separate by ','</p>
   </div>
   <input type="submit" class="btn btn-primary" value="Upload">
   <?php echo form_close(); ?>
	</div>
</div>   