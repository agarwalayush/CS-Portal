<?php
    class Make_AM extends CI_Model {
    	public function new_mentor($user_id){
    		$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					redirect('/login', 'refresh');
				}
			}
			else {
				redirect('/login', 'refresh');
			}
			if(!$userdata['status'] == 'co'){
				redirect('/login', 'refresh');
			}
			$query = $this->db->query("UPDATE user_data SET status='am' WHERE username='$user_id'");
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}
    	}
		public function link_studs($am,$st){
			$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					redirect('/login', 'refresh');
				}
			}
			else {
				redirect('/login', 'refresh');
			}
			if(!$userdata['status'] == 'co'){
				redirect('/login', 'refresh');
			}
			$query = $this->db->query("UPDATE user_data SET links = CONCAT(links, '$am,') WHERE username = '$st'");
			$query1 = $this->db->query("UPDATE user_data SET links = CONCAT(links, '$st,') WHERE username = '$am'");
			if($query && $query1){
				echo "1";
			}
			else{
				echo "0";
			}
		}
	}
?>