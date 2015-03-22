<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Core_team extends CI_Controller {
	public function index(){
		$data['error'] = '';
		$this->load->view('CS Portal/coreteam',$data);
	}
}