<?php
	include 'portal_header.php';
?>
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <br>
 	  <div class="container">
 	  	<?php
 	  		if($iscordi || $isam){
 	  			include 'upload_content.php';
 	  		}
 	  	?>
 	  </div>
 	  <br>
 	  <br>
 	  <div class="container">
 	  	<div class="table-responsive">
  		<table class="table table-hover">
   			<caption><h3>Recent Uploads</h3></caption>
   			<thead>
      			<tr>
         			<th style="width: 50%">Title</th>
         			<th style="width: 15%">Size(in MB)</th>
         			<th style="width: 15%">Uploaded On</th>
         			<th style="width: 20%">Tags</th>
      			</tr>
   			</thead>
   			<tbody id="files_list">
		    </tbody>
		</table>
		</div>
		<button type="button" class="btn btn-default btn-lg btn-block" id="showmore_files" style="width: 80%;margin-left: 10%;">
      		See More
   	  	</button>
   	  	<br>
 	  </div>
   </div>
</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery.min.js" ></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" ></script>
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/repository_page.js" ></script>
      <script type="text/javascript">
      	window.onload = function(){
      		$("#portal_course_repository").attr('class','active');
      	}
      </script>
   </body>
</html>