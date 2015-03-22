<?php
    $userdata = $this->session->all_userdata();
	if(isset($userdata['logged_in'])){
		if(!$userdata['logged_in']){
			redirect('/login', 'refresh');
		}
	}
	else {
		redirect('/login', 'refresh');
	}
	if($userdata['status'] == 'co'){
		$iscordi = TRUE;
	}
	else {
		$iscordi = FALSE;
	}
	if($userdata['status'] == 'am'){
		$isam = TRUE;
	}
	else {
		$isam = FALSE;
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Portal | <?php echo $userdata['name']; ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
      <?php echo link_tag('bootstrap/css/style.css'); ?>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
         queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page 
         via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
            html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
            respond.min.js"></script>
      <![endif]-->
      
<!-- All Models Start Here-->   
<!-- Change Password -->
<div class="modal fade" id="changepassword" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Change Password
            </h4>
         </div>
         <div class="modal-body">
            <?php
         		echo form_open('home/changepassword','class="form-horizontal" role="form"');
				echo '<div class="form-group">
                  		<div class="col-sm-8">';
				echo form_password('curr_password','','class="form-control" placeholder="Current Password" required');
				echo '</div>
            			</div>
            			<div class="form-group">
               			<div class="col-sm-8">';
				echo form_password('new_password','','class="form-control" placeholder="New Password" required');
				echo '</div>
            			</div>';
			   //echo form_submit('submit','Submit','class="btn btn-primary"');        	
         	?>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Close
            </button>
            <input type="submit" class="btn btn-primary" value="Submit">
            <?php echo form_close(); ?>
         </div>
      </div><!-- /.modal-content -->
	</div>
</div><!-- /.change password -->   
   
<!-- Update Profile -->
<div class="modal fade" id="updateprofile" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Update Profile
            </h4>
         </div>
         <div class="modal-body">
            <?php
         		echo form_open('home/updateprofile','class="form-horizontal" role="form"');
				echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Department</label>
                  <div class="col-sm-6">';
				?>
					<select name="update_dept" class="form-control" id="filter_department">
						<option value="AEROSPACE ENGG.">AE</option>
						<option value="BIOL.SCI. AND BIO.ENGG.">BSBE</option>
						<option value="CHEMICAL ENGG.">CHE</option>
						<option value="CHEMISTRY">CHM</option>
						<option value="CIVIL ENGG.">CE</option>
						<option value="COMPUTER SCI. AND ENGG.">CSE</option>
						<option value="ECONOMICS">ECO</option>
						<option value="ELECTRICAL ENGG.">EE</option>
						<option value="IND. & MANAGEMENT ENGG.">IME</option>
						<option value="MATERIAL SCIENCE & ENGINEERING">MSE</option>
						<option value="MATHEMATICS">MTH</option>
						<option value="MECHANICAL ENGG.">ME</option>
						<option value="PHYSICS">PHY</option>
    				</select>
				<?php
				echo '</div>
               </div>';
               echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">IITK Address</label>
                  <div class="col-sm-6">';
				echo form_input('update_address','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Mobile No.</label>
                  <div class="col-sm-6">';
				echo form_input('update_mobileno','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Friend\'s Mobile No.</label>
                  <div class="col-sm-6">';
				echo form_input('update_fmobileno','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   //echo form_submit('submit','Submit','class="btn btn-primary"');        	
         	?>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Close
            </button>
            <input type="submit" class="btn btn-primary" value="Submit">
            <?php echo form_close(); ?>
         </div>
      </div><!-- /.modal-content -->
	</div>
</div><!-- /.update profile -->

<!-- View Profile -->
<div class="modal fade" id="myprofile" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <div class="row">
            	<div class="col-sm-5">
            		<img class="img-thumbnail" style="margin-top:20px;" src="<?php echo base_url();?>bootstrap/images/profilepic/<?php echo $userdata['username']; ?>.jpg" onerror="this.src='<?php echo base_url();?>bootstrap/images/user.png'"/>
            	</div>
            	<div class="col-sm-7">
            		<?php
            			//echo heading($userdata['name'],3);
						echo "<h2>".$userdata['name']."</h2>";
            			echo "<p style='font-size:1.2em;'><b>Roll No. : </b> ".$userdata['roll_no']."</p>";
            			echo "<p style='font-size:1.2em;'><b>Department : </b> ".$userdata['dept']."</p>";
						echo "<p style='font-size:1.2em;'><b>IITK Address : </b> ".$userdata['room']."</p>";
						echo "<p style='font-size:1.2em;'><b>Mobile : </b> ".$userdata['contact']."</p>";
						echo "<p style='font-size:1.2em;'><b>Friend's Mobile : </b> ".$userdata['fcontact']."</p>";
            		?>
            	</div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Close
            </button>
         </div>
      </div><!-- /.modal-content -->
	</div>
</div><!-- /.view profile -->

<!-- Change Picture -->
<div class="modal fade" id="changepicture" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Change Picture
            </h4>
         </div>
         <div class="modal-body">
            <?php echo form_open_multipart('home/uploadpicture');
            	echo form_hidden('dp_name',$userdata['username']);
            ?>
			<input type="file" name="userfile" required/>
			<p class="help-block">Should not be more than 1MB</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Close
            </button>
            <input type="submit" class="btn btn-primary" value="Upload">
            <?php echo form_close(); ?>
         </div>
      </div><!-- /.modal-content -->
	</div>
</div><!-- /.change picture -->   
   <!-- All Models End Here--> 
   
<body>
<nav class="navbar navbar-default" role="navigation" style="background-color: #666666;">
   <div class="navbar-header">
      <a class="navbar-brand" href="http://www.iitk.ac.in/counsel/" style="color: white;">Counselling Service</a>
   </div>
   <div class="navbar-right" style="margin-right: 1%">
      <ul class="nav navbar-nav">
         <li><a href="#" style="color: white;">&nbsp; About</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">
              &nbsp;  Menu <span class="glyphicon glyphicon-align-justify"></span>
            </a>
            <ul class="dropdown-menu" style="background-color: white;">
            	<li><a href="#" data-toggle="modal" data-target="#myprofile"><span class="glyphicon glyphicon-info-sign"></span> View Profile</a></li>
            	<li class="divider"></li>
            	<li><a href="#" data-toggle="modal" data-target="#changepicture"><span class="glyphicon glyphicon-picture"></span> Change Picture</a></li>
               <li><a href="#" data-toggle="modal" data-target="#updateprofile"><span class="glyphicon glyphicon-wrench"></span> Edit Profile</a></li>
               <li><a href="#" data-toggle="modal" data-target="#changepassword"><span class="glyphicon glyphicon-transfer"></span> Change Password</a></li>
               <li class="divider"></li>
               <li><?php echo anchor('home/logout','<span class="glyphicon glyphicon-log-in"></span> Logout'); ?></li>
            </ul>
         </li>
      </ul>
      <p class="navbar-text navbar-right" style="color: white;">&nbsp; Signed in as <?php echo anchor('/home',$userdata['name']); ?>
      </p>
   </div>
</nav>
<div class="container error" id="error"><?php echo $error;?></div>
<br/>
<div class="container">
   <div class="row">
   		<div class="container">
   			<ul class="nav nav-tabs">
   				<li id="portal_home"><a href="<?php echo base_url();?>home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
   				<li id="portal_announcements"><a href="<?php echo base_url();?>announcements"><span class="glyphicon glyphicon-bullhorn"></span> Announcements</a></li>
   				<li id="portal_mentors"><a href="<?php echo base_url();?>mentors"><span class="glyphicon glyphicon-user"></span> Academic Mentors</a></li>
   				<li id="portal_core_team"><a href="<?php echo base_url();?>core_team"><span class="glyphicon glyphicon-star"></span> Core Team</a></li>
   				<li id="portal_course_repository"><a href="<?php echo base_url();?>course_repository"><span class="glyphicon glyphicon-book"></span> Course Repository</a></li>
   				<?php
   					if($iscordi || $isam){
   						echo "<li id='portal_attendance'><a href=\"".base_url()."attendance\"><span class=\"glyphicon glyphicon-list\"></span> Attendance</a></li>";
   					}
   					if($iscordi){
   						echo "<li id='portal_members'><a href=\"".base_url()."members\"><span class=\"glyphicon glyphicon-user\"></span> Members</a></li>";
						echo "<li id='portal_linkstudent'><a href=\"".base_url()."linkstudent\"><span class=\"glyphicon glyphicon-link\"></span> Link Student</a></li>";	
   					}
   				?>
			</ul>
		</div>
   </div>
   <!-- Header Ends here -->