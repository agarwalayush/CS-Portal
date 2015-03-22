<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentors extends CI_Controller {
	public function index(){
		$data['error'] = '';
		$this->load->view('CS Portal/academicmentors',$data);
	}
	public function show_mentors(){
		$showfrom = $this->input->post('mentors_from');
		$this->load->model('Show_mentors');
		$this->Show_mentors->load_mentors($showfrom);
	}
}