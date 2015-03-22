<?php
    include 'portal_header.php';
	if(!$iscordi)
		die("You don't have permission to access this stuff");
?>
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <div class="container">
  		<h3>Link Students</h3> 
  			<div class="row">
  				<form role="form">
   					<div class="form-group col-sm-5">
  						<input type="text" class="form-control" id="find_am" placeholder="Select AM">
  						<div id="list_am">
  							
						</div>
  					</div>
  					<div class="form-group col-sm-5">
  						<input type="text" class="form-control" id="find_st" placeholder="Select Student">
  						<div id="list_st">
  							
  						</div>
  					</div>
  					<button type="submit" class="btn btn-default" id="link_them" style="margin-left: 3%;">Submit</button>
  				</form>
  			</div>
  			<br/>
 	  </div>
   </div>
</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery.min.js" ></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" ></script>
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/linkst_page.js" ></script>
      <script type="text/javascript">
      	window.onload = function(){
      		$("#portal_linkstudent").attr('class','active');
      	}
      </script>
   </body>
</html>