<?php
	include 'portal_header.php';
?>
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <div class="container">
 	  		<br/>
  			<form role="form">
   				<div class="form-group col-lg-2">
      				<label for="name">Sort By</label>
      				<select class="form-control" id="filter_members">
         				<option value="r">Recent</option>
         				<option value="n">Name</option>
      				</select>
   				</div>
			</form>
 	  </div>
 	  <div id="members_list" class="container">
 	  	
 	  </div>
 	  <button type="button" class="btn btn-default btn-lg btn-block" id="showmore_members" style="width: 80%;margin-left: 10%;">
      		See More
   	  </button>
   	  <br>
   </div>
</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery.min.js" ></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" ></script>
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/members_page.js" ></script>
      <script type="text/javascript">
      	window.onload = function(){
      		$("#portal_members").attr('class','active');
      	}
      </script>
   </body>
</html>