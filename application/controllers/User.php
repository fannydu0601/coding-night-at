<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function login()
	
	{
		
		
		$this->load->model("user_model");
		
		$this->form_validation->set_rules("username", "Username","required");
		$this->form_validation->set_rules("password", "Password","required");
		$result = $this->user_model->login( $this->input->post("username"), $this->input->post("password") );
		if($this->form_validation->run())
		{
			
			if($result)
			{
				$sess_array = array();
				echo "login success";
				foreach($result as $row)
				{
					$sess_array = array(
					"id" =>$row->id,
					"username" => $row->username);
					$this->session->set_userdata("logged_in", $sess_array);
				}
				redirect("dashboard","refresh");
				return true;
				
			}
			else
			{
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



