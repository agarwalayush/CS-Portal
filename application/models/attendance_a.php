<?php
    class Attendance_a extends CI_Model {
        public function load_members(){
            $userdata = $this->session->all_userdata();
            if(isset($userdata['logged_in'])){
                if(!$userdata['logged_in']){
                    die('You are not allowed to see this stuff');
                }
            }
            else {
                die('You are not allowed to see this stuff');
            } 
                //echo "I am here";
                 $query = $this->db->query("SELECT * FROM user_data order by rollno asc");
              
                echo '<select name="add_student" class="form-control" id="filter_student">';
                echo "<option value=''>Students present</option>";
                foreach($query->result() as $row){
                    
                    echo "<option value='$row->username'>$row->name $row->rollno</option>";       
                }
             
        }
        public  function name($rollno)
        {
            $userdata = $this->session->all_userdata();
            $query = $this->db->query("SELECT * FROM user_data WHERE  rollno='$rollno' ");
            $query=$query->row();
            echo $query->username;
        }
    
    public function addmembers($value){
            $userdata = $this->session->all_userdata();
            if(isset($userdata['logged_in'])){
                if(!$userdata['logged_in']){
                    die('You are not allowed to see this stuff');
                }
            }
            else {
                die('You are not allowed to see this stuff');
            } 
                $rand_id=rand(1,100000);
                    
                if($value=='')
                    ;
                else
                {
                     $query = $this->db->query("SELECT * FROM user_data WHERE username='$value'");
                     $query=$query->row();
                     echo "<li class='list-group-item' id=$query->rollno value=$value>$query->name $query->rollno<button type='button' class='badge' onclick='rmove($query->rollno)'>X</button></li>";
                }
             
        }
    
    public function insert_attendance(){
               $ascordi = $this->input->post('ascordi');
               $subject = $this->input->post('subject');
               $date =$this->input->post('date');
               $taken_by =$this->input->post('taken_by');
               $total_students_attended =$this->input->post('total_students_attended');
               $feedback =$this->input->post('feedback');
               $students =$this->input->post('total');
             //  echo "$students";
           // $data = array('announcement' => $announce , 'date'=>$date,'time'=>$time, 'subject'=>$subject);
            $query = $this->db->query("INSERT INTO attendance(ascordi,date,subject,taken_by,total_students_attended,feedback,students) VALUES('$ascordi','$date','$subject','$taken_by','$total_students_attended','$feedback','$students')");
            //log_message('error','Query result is '.$this->db->_error_message());
            if($query){
                return 1;
            }
            else{
                return 0;
            }
        
               
             
        }
    
    }
?>
