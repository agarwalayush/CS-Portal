<?php
    class Signin extends CI_Model {
    	public function is_registered($username){
    		$query = $this->db->query("SELECT * FROM login WHERE username='$username'");
			if($query->num_rows() > 0){
				return TRUE;
			}
			else {
				return FALSE;
			}
    	}
		public function let_me_login($user,$pass){
			$query = $this->db->query("SELECT * FROM login WHERE username = '$user' and password = '$pass'");
			if($query->num_rows() > 0){
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
                   'status' => $iitk_data->status,
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