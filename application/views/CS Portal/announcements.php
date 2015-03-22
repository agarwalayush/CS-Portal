<?php
	include 'portal_header.php';
?>
   
   <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
 	  <div class="container">
  		<?php if($iscordi || $isam){
  		 include 'Aextra.php';
  		} ?>
 	  </div>
 	  <div class="container">
 	  	<h3>Recent Announcements</h3> 
		<?php $i=1;
					$query = $this->db->query("SELECT * FROM announcement order by id DESC LIMIT 10 OFFSET 0");
				foreach($query->result() as $row){
					
					echo "<div class='well'>
 	  						
 	  						<p>$i)$row->subject</p>
 	  						<p>$row->announcement</p>
 	  						<p>  $row->time $row->date</p>
 	  					</div>";
						$i++;		
				}
		
        ?>
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
      		$("#portal_announcements").attr('class','active');
      	}
      </script>
   </body>
</html>