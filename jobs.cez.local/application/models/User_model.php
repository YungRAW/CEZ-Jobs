<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{

		public function login($username, $password){
			// Validate

			$this->db->where('Username', $username);
			$this->db->where('Password', $password);

			$result = $this->db->get('users');
			
			if($result->num_rows() == 1)
			{
				$result=$result->result()[0];
				return $result->ID;
			} else {
				return false;
			}
		}
	}
