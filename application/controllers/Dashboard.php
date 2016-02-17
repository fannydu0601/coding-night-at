<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		if ($this->session->userdata("logged_in"))
		{
			$session_data = $this->session->userdata("logged_in");
			$data["username"] = $session_data["username"];
			$this->load->view("dashboard", $data);
		}
		else
		{
			redirect("login", "refresh");
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata("logged_in");
		session_destroy();
		redirect("dashboard", "refresh");
	}
	

	
}



