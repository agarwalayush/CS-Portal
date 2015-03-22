<?php
	echo $error;
	echo br();
	echo heading('Hall 2',1);
	$hc = valid_email('himnshu@xyz') ? 'valid' : 'invalid';
	echo br(2);
	echo base_url();
	echo anchor('http://google.com','Google','rel="nofollow"');
	echo anchor_popup('http://google.com','Google');
?>