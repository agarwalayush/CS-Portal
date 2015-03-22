<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course_repository extends CI_Controller {
	public function index(){
		$data['error'] = '';
		$this->load->view('CS Portal/courserepository',$data);
	}
	public function uploadfile(){		
		$config['upload_path'] = './Course_repository_files/files/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '20000';
		$config['overwrite'] = FALSE;
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$data['error'] = 'Some error occurred. Please try again.';
			echo "<script>alert('Some error occurred. Please try again')</script>";
			redirect('/course_repository', 'refresh');
		//	$this->load->view('CS Portal/courserepository', $data);
		}
		else
		{
			$upload_details = $this->upload->data();
			$this->load->model('Upload_course_content');
			$result = $this->Upload_course_content->upload_content($upload_details['file_name'],$upload_details['file_path'],$upload_details['file_size']);
			if($result){
				$data['error'] = 'Uploaded Successfully.';
				echo "<script>alert('Uploaded Successfully')</script>";
				redirect('/course_repository', 'refresh');
			//	$this->load->view('CS Portal/courserepository', $data);
			}
			else{
				$data['error'] = 'Some error occurred. Please try again.';
				echo "<script>alert('Some error occurred. Please try again')</script>";
				redirect('/course_repository', 'refresh');
			//	$this->load->view('CS Portal/courserepository', $data);
			}
		}
	}
	public function show_files(){
		$showfrom = $this->input->post('files_from');
		$this->load->model('Show_files');
		$this->Show_files->load_files($showfrom);
	}
	public function file_download($fileId){
	//	$fileId = $this->input->post('file_Id');
		$this->load->model('File_download');
		$this->File_download->download_file($fileId);
	}
}