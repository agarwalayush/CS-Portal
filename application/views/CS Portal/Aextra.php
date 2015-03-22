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
				echo "<div class='container'>";
         		echo form_open('announcements/add_announce','class="form-horizontal" role="form"');
				echo '<div class="form-group">';
				echo '<h3>Create Announcement</h3>';
				echo '<div class="row">';
				echo '<div class="col-sm-4">';
				echo form_input('subject','','class="form-control" placeholder="Subject" required');
				echo '</div></div><br>';
				echo '<div class="row">';
				echo '<div class="col-md-6">';
				$xyz = array(
              'name'        => 'announce',
              'id'          => 'announce',
              'value'       => '',
              'rows'   => '5',
              'cols'   =>'5',
              'style'       => 'width:100%',
            );
			    
				echo  form_textarea($xyz);
				echo '</div>
            			</div><br>';
            	
				echo '<div class="row">
    				  <div class="col-sm-4">';
			   echo form_submit('submit','Submit','class="btn btn-primary"');
			   echo form_close();
			   echo '</div></div></div></div>';        	
         	
         	 	
         	?>

