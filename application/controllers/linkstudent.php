<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LinkStudent extends CI_Controller {
	public function index(){
		$data['error'] = '';
		$this->load->view('CS Portal/linkstudent',$data);
	}
	public function get_am_list(){
		$key = $this->input->post('am_key');
		$this->load->model('Show_mentors');
		$this->Show_mentors->search_mentor($key);
	}
	public function get_st_list(){
		$key = $this->input->post('st_key');
		$this->load->model('Show_members');
		$this->Show_members->search_member($key);
	}
	public function link_am_st(){
		$am_id = $this->input->post('am_userid');
		$st_id = $this->input->post('st_userid');
		$am_id = $this->db->escape_str($am_id);
		$st_id = $this->db->escape_str($st_id);
		$this->load->model('Make_AM');
		$this->Make_AM->link_studs($am_id,$st_id);
	}
}
?>