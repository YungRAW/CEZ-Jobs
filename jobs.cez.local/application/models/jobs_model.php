<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model{
    
    public function __construct(){
        
        $this->load->database();
        $this->load->model('livetable_model');
  		$this->load->model('jobs_model');
        
    }
    
    public function get_jobs(){
		
		$this->db->order_by('ID');
        $query = $this->db->get('jobs');
        return $query->result_array();
        
    }
	
	public function create_job(){
		

		$data = array(
			'Companie' => $this->input->post('companie'),
			'Directia' => $this->input->post('directie'),
			'Departament' => $this->input->post('departament'),
			'DenumirePost' => $this->input->post('denumirePost'),
			'FirmaPost' => $this->input->post('firmaPost'),
			'TipPost' => $this->input->post('tipPost'),
			'PerioadaPost'  => $this->input->post('perioadaPost'),
			'Locatie' => $this->input->post('locatia'),
			'InformatiiPost' => $this->input->post('informatiiPost'),
			'Cerinte' => $this->input->post('cerintePost'),
			'Responsabilitati' => $this->input->post('responsabilitati'),
			'ValabilitateStart' => $this->input->post('valabilitateStart'),
			'ValabilitateEnd' => $this->input->post('valabilitateEnd')
		);
		
		return $this->db->insert('jobs', $data);
	}

	
	public function delete_job($id){

		$cwd = getcwd();
		$this->db->where('id', $id);
		$this->delete('jobs');
		return true;
		
	}
	
	
	public function edit_job($id){
		
		$data = array(
			'Companie' => $this->input->post('companie'),
			'Directie' => $this->input->post('directie'),
			'Departament' => $this->input->post('departament'),
			'DenumirePost' => $this->input->post('denumirePost'),
			'FirmaPost' => $this->input->post('firmaPost'),
			'TipPost' => $this->input->post('tipPost'),
			'PerioadaPost'  => $this->input->post('perioadaPost'),
			'Locatia' => $this->input->post('locatia'),
			'InformatiiPost' => $this->input->post('informatiiPost'),
			'Cerinte' => $this->input->post('cerintePost'),
			'Responsabilitati' => $this->input->post('responsabilitati'),
			'ValabilitateStart' => $this->input->post('valabilitateStart'),
			'ValabilitateEnd' => $this->input->post('valabilitateEnd')
		);
		
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('jobs', $data);
		
	}
	
	public function get_jobs_by_company($company_id){

			$this->db->order_by('jobs.ID', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');
			$query = $this->db->get_where('posts', array('category_id' => $category_id));
			return $query->result_array();

	}

			
}
?>