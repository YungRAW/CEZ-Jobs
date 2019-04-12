<?php

class Companies_model extends CI_Model {

	public function __construct(){

		$this->load->database();

	}

	public function get_company($id = NULL){
		
		 if($id != NULL){

		 	$this->db->where("companies_id", $id);

		 }


		$data = $this->db->get("companies")->result();

		return $data;

	}


}