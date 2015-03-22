<?php
    class Show_mentors extends CI_Model {
    	public function load_mentors($showfrom){
    		$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					die('You are not allowed to see this stuff');
				}
			}
			else {
				die('You are not allowed to see this stuff');
			}
			$query = $this->db->query("SELECT * FROM user_data WHERE status='am' order by name LIMIT 15 OFFSET $showfrom");
			foreach($query->result() as $row){
				echo "<div class=\"user\">
 	  						<img class=\"img-responsive\" src=\"".base_url()."bootstrap/images/profilepic/$row->username.jpg\" onerror=\"this.src='".base_url()."bootstrap/images/user.png'\"/>
 	  						<p>$row->name ($row->rollno)</p>
 	  					</div>";		
			}
		}
		public function search_mentor($key){
			$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					die('You are not allowed to see this stuff');
				}
			}
			else {
				die('You are not allowed to see this stuff');
			}
			$query = $this->db->query("SELECT * FROM user_data WHERE status='am' and name LIKE '%$key%' order by name LIMIT 20");
			foreach ($query->result() as $row) {
				echo "<a href='#' class='list-group-item' onclick=\"select_am('$row->name','$row->username')\">$row->name</a>";
			}
		}
	}
?>