<?php

class User_model extends CI_Model{
	public function insert(){
		$data = array(
		     "username"=>$this->input->post("username"),
			 "password"=>$this->input->post("password"),
			 "firstname"=>$this->input->post("firstname"),
			 "lastname"=>$this->input->post("lastname")
		);
		return $this->db->insert("user",$data);
	}
	/* public function getUser(){
		$this->db->select("username,password");
		$this->db->from("user");
		$query = $this->db->get();
		return query->result();
	} */
	public function login($username,$password){
		$this->db->select("username,password");
		$this->db->from("user");
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}
		else{
			return false;
		}
	}
}