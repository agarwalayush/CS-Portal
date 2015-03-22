<?php
    class Show_members extends CI_Model {
    	public function load_members($sortby,$showfrom){
    		$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					die('You are not allowed to see this stuff');
				}
			}
			else {
				die('You are not allowed to see this stuff');
			}
			if($userdata['status'] == 'co'){
				if($sortby == 'r'){
					$query = $this->db->query("SELECT * FROM user_data WHERE status='st' order by id desc LIMIT 15 OFFSET $showfrom");
				}
				else {
					$query = $this->db->query("SELECT * FROM user_data WHERE status='st' order by name LIMIT 15 OFFSET $showfrom");	
				}
				foreach($query->result() as $row){
					$user_type = 'User';
					echo "<div class=\"user\" id='member_$row->username'>
 	  						<img class=\"img-responsive\" src=\"".base_url()."bootstrap/images/profilepic/$row->username.jpg\" onerror=\"this.src='".base_url()."bootstrap/images/user.png'\"/>
 	  						<p>$row->name ($row->rollno) <br>
 	  						$user_type <br>
 	  						<a style=\"cursor:pointer;\" onclick=\"makeAM('$row->username')\">Make AM</a></p>
 	  					</div>";		
				}
			}					
			else {
				die('You are not allowed to see this stuff');
			}
    	}
		public function search_member($key){
			$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					die('You are not allowed to see this stuff');
				}
			}
			else {
				die('You are not allowed to see this stuff');
			}
			$query = $this->db->query("SELECT * FROM user_data WHERE status='st' and name LIKE '%$key%' order by name LIMIT 20");
			foreach ($query->result() as $row) {
				echo "<a href='#' class='list-group-item' onclick=\"select_st('$row->name','$row->username')\">$row->name</a>";
			}
		}
	}
?>