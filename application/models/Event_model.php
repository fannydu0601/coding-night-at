<?php

class Event_model extends CI_Model{
	public function insert(){
		$data = array(
		     "date_time"=>$this->input->post("date_time"),
			 "title"=>$this->input->post("title"),
		);
		return $this->db->insert("events",$data);
	}
	/* public function getUser(){
		$this->db->select("username,password");
		$this->db->from("user");
		$query = $this->db->get();
		return query->result();
	} */
/* 	public function login($username,$password){
		$this->db->select("id,username,password");
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
	} */
}