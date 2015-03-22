<?php
	include 'portal_header.php';
?>
  <div class="row" style="background-color: white;box-shadow: 5px 5px 5px #888888;border-radius: 5px;">
      <div class="container">
        <div class="row"> 
            <div class="col-md-8">
                <h3>Add Attendance</h3>
                <?php if($iscordi || $isam){
                    include('attendance_extra.php');
                } ?>
            </div>
            <div class="col-md-4">
                <br>
                <ul class="list-group" id="show_attend"></ul>
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
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/attendance.js" ></script>
     <script type="text/javascript">
      	window.onload = function(){
      		$("#portal_attendance").attr('class','active');
      	}
      </script>
   </body>
</html>