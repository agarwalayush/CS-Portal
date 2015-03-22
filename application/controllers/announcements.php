<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Announcements extends CI_Controller {
	public function index(){
		$data['error'] = '';
		$this->load->view('CS Portal/announcements',$data);
	}
	public function add_announce(){
		$this->load->model('add_announcement');
		$result = $this->add_announcement->create_announce();
		if($result == 1){
			$data['error'] = 'Announcement successfully added';
 			$this->load->view('CS Portal/announcements',$data);
		}
		else {
			$data['error'] = 'Some error occured. Please try again later.';
 			$this->load->view('CS Portal/announcements',$data);
		}
	}
}