<?php
    class Update_profile extends CI_Model {
    	public function update_profile(){
    		$userdata = $this->session->all_userdata();
			$user = $userdata['username'];
			$new_dept = $this->input->post('update_dept');
			$new_addr = $this->input->post('update_address');
			$new_mobile = $this->input->post('update_mobileno');
			$new_fmobile = $this->input->post('update_fmobileno');
			$query = $this->db->query("UPDATE user_data SET dept='$new_dept',address='$new_addr',mobileno='$new_mobile',fmobileno='$new_fmobile' WHERE username='$user'");
			if($query){
				$iitk_data = $this->db->query("SELECT * FROM user_data WHERE username = '$user'");
				$iitk_data = $iitk_data->row();
				$userdata = array(
                   'username'  => $user,
                   'roll_no' => $iitk_data->rollno,
                   'name' => $iitk_data->name,
                   'dept' => $iitk_data->dept,
                   'room' => $iitk_data->address,
                   'contact' => $iitk_data->mobileno,
                   'fcontact' => $iitk_data->fmobileno,
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($userdata);
				return TRUE;
			}
			else {
				return FALSE;
			}
    	}			
	}
?>    	