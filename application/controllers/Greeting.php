<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Greeting extends CI_Controller {

	
	
	public function hi()
	{
		$this->load->view('welcome_message');
	}
}
