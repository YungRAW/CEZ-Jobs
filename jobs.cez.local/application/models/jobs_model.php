<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model{
    
    public function __construct(){
        
        $this->load->database();
        
    }
    
    public function get_jobs(){
		
		$this->db->order_by('name');
        $query = $this->bd->get('');
        return $query -> result_array();
        
    }
	
	public function create_job(){
		
		$data = array(
			'Companie' => $companie;
			'Directia' => $this->input->jobs('Directia');
			'Departament' => $departament;
			'DenumirePost' => $this->input->jobs('DenumirePost');
			'FirmaPost' => $this->input->jobs('FirmaPost');
			'TipPost' => $tip;
			'PerioadaPost'  => $this->input->jobs('PerioadaPost');
			'Locatie' => $this->input->jobs('Locatie');
			'InformatiiPost' => $this->input->jobs('InformatiiPost');
			'Responsabilitati' => $this->input->jobs('Responsabilitati');
			'ValabilitateStart' => $this->input->jobs('ValabilitateStart');
			'ValabilitateEnd' => $this->input->jobs('ValabilitateEnd');
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
		'Companie' => $companie;
			'Directia' => $this->input->jobs('Directia');
			'Departament' => $departament;
			'DenumirePost' => $this->input->jobs('DenumirePost');
			'FirmaPost' => $this->input->jobs('FirmaPost');
			'TipPost' => $tip;
			'PerioadaPost'  => $this->input->jobs('PerioadaPost');
			'Locatie' => $this->input->jobs('Locatie');
			'InformatiiPost' => $this->input->jobs('InformatiiPost');
			'Responsabilitati' => $this->input->jobs('Responsabilitati');
			'ValabilitateStart' => $this->input->jobs('ValabilitateStart');
			'ValabilitateEnd' => $this->input->jobs('ValabilitateEnd');
			'Ocupat' => $ocupat;
		);
		
		$this->db->where('id', $this->input->jobs('id'));
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