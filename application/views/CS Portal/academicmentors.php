<?php
	include 'portal_header.php';
?>
   
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <div class="container">
  		<div id="mentors_list" class="container">
 	  	
 	  	</div>
 	  	<button type="button" class="btn btn-default btn-lg btn-block" id="showmore_mentors" style="width: 80%;margin-left: 10%;">
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
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/mentors_page.js" ></script>
      
      <script type="text/javascript">
      	window.onload = function(){
      		$("#portal_mentors").attr('class','active');
      	}
      </script>
   </body>
</html>