<?php 
	function session_admin(){
		$this->load->library('session');
		if($this->session->userdata('id')==""){
			return false;
		}else{
			return true;
		}
	}		
?>