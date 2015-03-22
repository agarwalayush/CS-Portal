
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
                echo form_open('attendance/add_attendance','class="form" role="form"');
                echo '<div class="form-group">';
                echo '<br>';
                
                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo form_input('subject','','class="form-control" placeholder="Subject" required');
                echo '</div>';
                echo '</div><br>';
                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo form_input('ascordi','','class="form-control" placeholder="Coordinator Present" required');
                echo '</div>';
                echo '</div><br>';
                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo form_input('date','','class="form-control" placeholder="Date" required');
                echo '<p class="help-block"> (Format : yyyy-mm-dd)</p>';
                //echo '<input type="text" id="date">';
    ?>
  
    <?php
                echo '</div>';
                echo '</div>';
                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo form_input('taken_by','','class="form-control" placeholder="Taken By" required');
                echo '</div></div><br>';
                echo '<div class="row">';
                echo '<div class="col-md-5">';
                echo form_input('total_students_attended','','class="form-control" placeholder="Total Attendance" required');
                echo '</div>';
                echo '</div></div>';
                
                echo '<div class="row">';
                echo '<div class="col-md-8">';
               // echo form_hidden("total","","id='students'");
                echo '<input type="hidden" name="total" id="students" value="">';
                
                $xyz = array(
              'name'        => 'feedback',
              'id'          => 'feedback',
              'value'       => '',
              'rows'   => '5',
              'cols'   =>'5',
              'style'       => 'width:80%',
            );
                
                echo  form_textarea($xyz);
                echo '
                        </div></div>';
               
               
                ?>
                <br>
            <?php    
                echo '<div class="row">';
                echo '<div class="col-md-5">';
            
                echo '
                  <div  id="members_list">';
                ?>
                 
                </select>
                 </div>
                </div>
                <br><br>
                <div class="col-md-5">
                <?php echo form_submit('submit','Submit','class="btn btn-primary"');
               echo form_close();
               ?>
               </div>
                </div>
                <?php
                   /* echo '<div class="form-group">
                      <div class="col-sm-offset-8 col-sm-10">';

               echo form_submit('submit','Submit','class="btn btn-primary"');
               echo form_close();
               echo '</div></div>';*/?>
                