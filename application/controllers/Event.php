<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
class Event extends CI_Controller {

	function index()
	{
		$this->load->view('event');
	}
	
	public function create()
	{
		$this->load->model("event_model");
		$this->form_validation->set_rules("title", "Title","required");
		//$this->form_validation->set_rules("date_time", "Date and Time","required");
		
		
		if($this->form_validation->run()){
			echo "success";
			$this->event_model->insert();
		}
		else
		{
			echo "no good!";
		}
		//print_r($_POST);
		$this->load->view('event');
	}
	
}