<?php

class User_model extends CI_Model{
	public function insert(){
		$data = array(
		     "username"=>$this->input->post("userename"),
			 "password"=>$this->input->post("password"),
			 "firstname"=>$this->input->post("firstname"),
			 "lastname"=>$this->input->post("lastname")
		);
		return $this->db->insert("user",$data);
	}
}