<?php
	class File_download extends CI_Model {
		public function download_file($file_id){
			$userdata = $this->session->all_userdata();
			if(isset($userdata['logged_in'])){
				if(!$userdata['logged_in']){
					redirect('/login', 'refresh');
				}
			}
			else {
				redirect('/login', 'refresh');
			}
			echo $file_id;
			$query = $this->db->query("SELECT * FROM portal_files WHERE name='$file_id' LIMIT 1");
			$row = $query->row();
			$file_id = explode('.', $file_id);
			$bad = array_merge(
        array_map('chr', range(0,31)),
        array("<", ">", ":", '"', "/", "\\", "|", "?", "*"));
			$newfilename = str_replace($bad, "", $row->title);
			header('Content-Disposition: attachment; filename ="'.$newfilename.'.'.$file_id[1].'"'); 
    		readfile("./$row->path".$row->name);
		}	
	}
?>