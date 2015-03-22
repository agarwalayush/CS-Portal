<?php
class Signup extends CI_Model {
	function create_member($username){
    	$password = random_string('alnum', 10);
		$name = $this->input->post('signup_name');
		$rollno = $this->input->post('signup_rollno');
		$dept = $this->input->post('signup_dept');
		$address = $this->input->post('signup_address');
		$mobileno = $this->input->post('signup_mobileno');
		$fmobileno = $this->input->post('signup_fmobileno');
		$this->email->from('himnshu@iitk.ac.in', 'Himanshu Choudhary');
		$this->email->to($username.'@iitk.ac.in');
		$this->email->subject('Counselling Service Portal Registration');
		$this->email->message("Hi, $name
		You have successfully signed up for counselling service portal. Here is your username and password.
		Username : $username
		Password : $password
		Have a nice day.");
		//$send_mail = $this->email->send();
		$send_mail = TRUE;
		if($send_mail){
			$ip = $this->input->ip_address();
			$data = array('username' => $username , 'password'=>$password, 'ip' => $ip);
			$query = $this->db->query("INSERT INTO login(username,password,ip) VALUES('$username','$password','$ip')");
			$query1 = $this->db->query("INSERT INTO user_data(username,rollno,name,dept,address,mobileno,fmobileno) VALUES('$username',$rollno,'$name','$dept','$address','$mobileno','$fmobileno')");
			//log_message('error','Query result is '.$this->db->_error_message());
			if($query && $query1){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else {
			return FALSE;
		}
    }
	function already_member($requested_username){
		$query = $this->db->query("SELECT * FROM login WHERE username='$requested_username'");
		if($query->num_rows() > 0){
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
}
?>