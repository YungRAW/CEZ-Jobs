<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Companie extends CI_Controller {
    
    
    public function index(){
        
        $data['title'] = 'Companii';
        $data['companies'] = $this->company_model->get_company();
    }
    
    public function jobs_in_company($id){
        
        $data['title'] = $this->company_model->get-company($id)->name;
        
        $data['jobs'] = $this->jobs_model->get_jobs_by_company($id);
        
        $this->load->view('templates/header');
        $this->load->view('jobs/index', $data);
        $this->load->view('templates/footer');
    
    }   
}

>