<?php
    class Show_files extends CI_Model {
    	public function load_files($showfrom){
    		$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					die('You are not allowed to see this stuff');
				}
			}
			else {
				die('You are not allowed to see this stuff');
			}
			$query = $this->db->query("SELECT * FROM portal_files order by id desc LIMIT 20 OFFSET $showfrom");
			foreach($query->result() as $row){
				$size_in_mb = round($row->size/1024, 2);
			//	$href = $row->path.$row->name;
				$href = "course_repository/file_download/$row->name";
				echo "<tr>
 	  						<td><a href='$href'>$row->title</a></td>
        			 		<td>$size_in_mb</td>
        			 		<td>$row->uploaded_on</td>
        			 		<td>$row->tags</td>
 	  				</tr>";		
			}
		}
	}
?>