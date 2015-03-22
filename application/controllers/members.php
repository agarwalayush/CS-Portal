<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {
	public function index(){
		$data['error'] = '';
		$this->load->view('CS Portal/members',$data);
	}
	public function show_members(){
		$sortby = $this->input->post('members_filter');
		$showfrom = $this->input->post('members_from');
		$this->load->model('Show_members');
		$this->Show_members->load_members($sortby,$showfrom);
	}
	public function make_mentor(){
		$userid = $this->input->post('am_userid');
		$this->load->model('Make_AM');
		$result = $this->Make_AM->new_mentor($userid);
		if($result){
			echo '1';
		}
		else{
			echo '0';
		}
	}
}
?>