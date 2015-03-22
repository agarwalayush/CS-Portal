<?php
    $info = $this->session->all_userdata();
	echo "Welcome, ".$info['username'];
	echo anchor('login/let_me_logout','Logout');
?>