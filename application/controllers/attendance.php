<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class attendance extends CI_Controller {
    public function index(){
        $data['error'] = '';
        $this->load->helper('date');
        $this->load->view('CS Portal/attendance',$data);
    }
    public function get_name(){
        $this->load->model('Attendance_a');
        $rollno = $this->input->post('rollno');
        $this->Attendance_a->name($rollno);
    }
    public function show_members(){
        $this->load->model('Attendance_a');
        $this->Attendance_a->load_members();
    }
     public function add_members(){
        $value_name = $this->input->post('value');
        $this->load->model('Attendance_a');
        $this->Attendance_a->addmembers($value_name);
    }
    public function add_attendance(){
        //$students = $this->input->post('student');
        $this->load->model('Attendance_a');
        $result = $this->Attendance_a->insert_attendance();
        if($result == 1){
            $data['error'] = 'Attendance successfully added';
            $this->load->view('CS Portal/profile',$data);
        }
        else {
            $data['error'] = 'Some error occured. Please try again later.';
            $this->load->view('CS Portal/profile',$data);
    }
  

    }
}