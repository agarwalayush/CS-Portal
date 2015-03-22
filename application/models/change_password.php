<?php
    class Change_password extends CI_Model {
    	public function set_password(){
    		$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					redirect('/login', 'refresh');
				}
			}
			else {
				redirect('/login', 'refresh');
			}
			$username = $userdata['username'];
			$curr_pass = $this->input->post('curr_password');
			$new_pass = $this->input->post('new_password');
			$query = $this->db->query("SELECT * FROM login WHERE username = '$username'");
			$row = $query->row();
			if($curr_pass == $row->password){
				$resultofchange = $this->db->query("UPDATE login SET password='$new_pass' where username = '$username'");
				if($resultofchange){
					return 1;
				}				
				else {
					return 2;
				}
			}
			else {
				return 0;
			}
    	}			
	}
?>    	