<?php
class add_announcement extends CI_Model {
	function create_announce(){
		$announce = $this->input->post('announce');
		$subject = $this->input->post('subject');
		$date =date('Y-m-d') ;
		$time=date('h:i:s');
		
	
			$data = array('announcement' => $announce , 'date'=>$date,'time'=>$time, 'subject'=>$subject);
			$query = $this->db->query("INSERT INTO announcement(announcement,date,time,subject) VALUES('$announce','$date','$time','$subject')");
			//log_message('error','Query result is '.$this->db->_error_message());
			if($query){
				return 1;
			}
			else{
				return 0;
			}
		
		}
	
   
}