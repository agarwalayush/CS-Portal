<?php
    class Upload_course_content extends CI_Model {
    	public function upload_content($filename,$filepath,$filesize){
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
			$uploaded_by = $userdata['username'];
			$uploader_name = $userdata['name'];
			$filepath = 'Course_repository_files/files/';
			date_default_timezone_set("Asia/Kolkata");
			$time = date("Y-m-d H:i:s", time("NOW"));
			$title = $this->input->post('upload_title');
			$tags = $this->input->post('upload_tags');
			$query = $this->db->query("INSERT INTO portal_files (title,tags,uploader,uploader_name,uploaded_on,size,path,name) VALUES('$title','$tags','$uploaded_by','$uploader_name','$time','$filesize','$filepath','$filename')");
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
	}
?>    	