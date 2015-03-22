<?php
	include 'portal_header.php';
?>
   
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <div class="container">
  		<h3>Core Team</h3> 
  		
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
      		$("#portal_core_team").attr('class','active');
      	}
      </script>
   </body>
</html>