<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$data['error'] = '';
 		$this->load->view('CS Portal/profile',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		$data['error'] = '';
		redirect('login', 'refresh');
 		//$this->load->view('CS Portal/index',$data);
	}
	public function changepassword(){
		$this->load->model('Change_password');
		$result = $this->Change_password->set_password();
		if($result == 1){
			$data['error'] = 'Password Successfully Changed';
 			$this->load->view('CS Portal/profile',$data);
		}
		elseif ($result == 0) {
			$data['error'] = 'Incorrect Current Password';
 			$this->load->view('CS Portal/profile',$data);
		}
		else {
			$data['error'] = 'Some error occured. Please try again later.';
 			$this->load->view('CS Portal/profile',$data);
		}
	}
	public function updateprofile(){
		$this->load->model('Update_profile');
		$result = $this->Update_profile->update_profile();
		if($result){
			$data['error'] = 'Profile Updated Successfully.';
 			$this->load->view('CS Portal/profile',$data);
		}
		else{
			$data['error'] = 'Some error occured. Please try again later.';
 			$this->load->view('CS Portal/profile',$data);
		}
	}
	public function uploadpicture(){
		$user = $this->input->post('dp_name');
		
		$config['upload_path'] = './bootstrap/images/profilepic/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['file_name'] = $user.'.jpg';
		$config['overwrite'] = TRUE;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$data['error'] = 'Some error occurred. Did you upload a right format?';
			$this->load->view('CS Portal/profile', $data);
		}
		else
		{
			$data['error'] = 'Uploaded Successfully.';
			$this->load->view('CS Portal/profile', $data);
		}
	}
}