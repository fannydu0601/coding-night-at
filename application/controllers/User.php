<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	
	public function login()
	{
		$this->load->model("user_model");
		
		$this->form_validation->set_rules("username", "Username","required");
		$this->form_validation->set_rules("password", "Password","required");
		if($this->form_validation->run()){
			
			if($this->user_model->login($this->input->post("username"), $this->input->post("password"))){
				echo "login success";
			}
			else{
				echo "fail login";
			}
			
		}
		
		$this->load->view('login');
		
		
	}
	
	public function register(){
		$this->load->model("user_model");
		
		$this->form_validation->set_rules("username", "Username","required");
		$this->form_validation->set_rules("password", "Password","required");
		
		if($this->form_validation->run()){
			echo "success";
			$this->user_model->insert();
		}
		//print_r($_POST);
		$this->load->view('register');
	}
}



