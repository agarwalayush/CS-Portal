<?php
	include 'portal_header.php';
?>
  
   
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <div class="container">
  		<h3>Welcome, <?php echo $userdata['name']; ?></h3> 
  		<div class="panel panel-default">
   			<div class="panel-heading">
      			<h3 class="panel-title">Profile Details</h3>
   			</div>
   			<div class="panel-body">
      			Panel content
   			</div>
		</div>
 	  </div>
   </div>
</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery.min.js" ></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" ></script>
      <script type="text/javascript">
      	window.onload = function(){
      		$("#portal_home").attr('class','active');
      	}
      </script>
   </body>
</html>