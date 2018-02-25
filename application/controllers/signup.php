<?php
class Signup extends CI_Controller{
	function __construct(){
		parent::__construct();

	}

	function index(){
		$status = $this->session->userdata("status");
		if($status == "login"){
			redirect(base_url('admin'));
		}
		$this->load->view('v_signup');
		
	}}
?>