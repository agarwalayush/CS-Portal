<?php
	$userdata = $this->session->all_userdata();
	if(isset($userdata['logged_in'])){
		if($userdata['logged_in']){
			redirect('/home', 'refresh');
		}
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Portal | Login</title>
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
   </head>
   <body>
<nav class="navbar navbar-default" role="navigation" style="background-color: #666666;">
   <div class="navbar-header">
      <a class="navbar-brand" href="http://www.iitk.ac.in/counsel/" style="color: white;">Counselling Service</a>
   </div>
   <div class="navbar-right" style="margin-right: 1%">
      <ul class="nav navbar-nav">
         <li><a href="#" style="color: white;margin-left: 2%;">About</a></li>
      </ul>
      <p class="navbar-text navbar-right"><a href="#" data-toggle="modal" data-target="#signup" style="color: white;">&nbsp; Sign Up</a></p>
   </div>
</nav>

<div class="jumbotron">
   <div class="container">
      <h1>Welcome to the Portal</h1>
      <p>Please login to continue</p>
      <p>
      		<?php
         		echo form_open('login/signin','class="form-horizontal" role="form"');
				echo '<div class="form-group">
                  		<div class="col-sm-3">';
				echo form_input('signin_username','','class="form-control" placeholder="Username" required');
				echo '</div>
            			</div>
            			<div class="form-group">
               			<div class="col-sm-3">';
				echo form_password('signin_password','','class="form-control" placeholder="Password" required');
				echo '</div>
               			</div><div class="form-group">
               			<div class="col-sm-offset-0 col-sm-3">
                  		<button type="submit" class="btn btn-primary">Log in</button>
               			</div>
            			</div>';
				echo form_close();
			   //echo form_submit('submit','Submit','class="btn btn-primary"');        	
         	?>
         	<p><?php echo $error; ?></p>
         <!--<form class="form-horizontal" role="form" method="post" action="login.php">
            <div class="form-group">
               <div class="col-sm-3">
                  <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-3">
                  <input type="password" class="form-control" id="password" placeholder="Enter password" required>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-0 col-sm-3">
                  <button type="submit" class="btn btn-primary">Log in</button>
               </div>
            </div>
         </form>-->
      </p>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Sign Up
            </h4>
         </div>
         <div class="modal-body">
         	<?php
         		echo form_open('login/signup','class="form-horizontal" role="form"');
				echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Username</label>
                  <div class="col-sm-6">';
				echo form_input('signup_username','','class="form-control" id="username" placeholder="IITK Username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Name</label>
                  <div class="col-sm-6">';
				echo form_input('signup_name','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Roll No.</label>
                  <div class="col-sm-6">';
				echo form_input('signup_rollno','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Department</label>
                  <div class="col-sm-6">';
				?>
					<select name="signup_dept" class="form-control" id="filter_department">
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
				echo form_input('signup_address','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Mobile No.</label>
                  <div class="col-sm-6">';
				echo form_input('signup_mobileno','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   echo '<div class="form-group">
                  <label for="firstname" class="col-sm-4 control-label">Friend\'s Mobile No.</label>
                  <div class="col-sm-6">';
				echo form_input('signup_fmobileno','','class="form-control" id="username" required');
				echo '</div>
               </div>';
			   //echo form_submit('submit','Submit','class="btn btn-primary"');
			   	
         	
         	?>
            <!--<form class="form-horizontal" role="form" method="post" action="signup.php">
               <div class="form-group">
                  <label for="firstname" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-5">
                     <input type="text" class="form-control" id="username" placeholder="IITK Username" required>
                  </div>
               </div>-->
         </div>
         <div class="modal-footer">
            <p class="pull-left">Your password will be sent to your mail</p>
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Cancel
            </button>
            <input type="submit" class="btn btn-primary" value="Submit">
            <!--</form>-->
            <?php  
            	echo form_close();
            ?>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>



      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery.min.js" ></script>
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" ></script>
   </body>
</html>