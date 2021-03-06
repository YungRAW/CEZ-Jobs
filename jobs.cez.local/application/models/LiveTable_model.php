<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveTable_model extends CI_Model {
 
  function __construct(){
        
      $this->load->database();
      $this->load->model('livetable_model');
  		$this->load->model('jobs_model');
        
  }



 function load_data() {
  
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get('sample_data');
  return $query->result_array();
  
 }

 function insert($data) { 
     
  $this->db->insert('sample_data', $data);
  
 }

 function update($data, $id) {
     
  $this->db->where('id', $id);
  $this->db->update('sample_data', $data); 
  
 }

 function delete($id) {
     
  $this->db->where('id', $id);
  $this->db->delete('sample_data');
  
 }
 
}
?>