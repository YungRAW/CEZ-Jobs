<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveTable extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('livetable_model');
 }

 public function index()
 {
  
  $data=[];
  $this->load->database();

  $data['jobs']=$this->db->where('Ocupat',0)->get('jobs')->result_array();
  
  $this->load->view('header');
  $this->load->view('jobs/live_table', $data);
  $this->load->view('footer');

 }

 public function add()
 {

  $data = [];
  $data['title'] = " Adaugati un job ";
  //$data['jobs'] = $this->jobs_model->get_jobs();
  
  $this->form_validation->set_rules('directie', 'Directie' , 'required' );
  $this->form_validation->set_rules('denumire', 'Denumire', 'required');
  $this->form_validation->set_rules('departamentul','Departamentul','required');
  $this->form_validation->set_rules('firma', 'Firma' , 'required');
  $this->form_validation->set_rules('tipulPostului' , 'TipulPostului' , 'required');
  $this->form_validation->set_rules('perioadaPostului', 'PerioadaPostului', 'required');
  $this->form_validation->set_rules('locatia', 'Locatia', 'required');
  $this->form_validation->set_rules('informatiiPost', 'InformatiiPost' , 'required');
  $this->form_validation->set_rules('cerintelePostului' , 'CerintelePostului' , 'required');
  $this->form_validation->set_rules('responsabilitatilePostului' , 'ResponsabilitatilePostului' , 'required');
  $this->form_validation->set_rules('valabilitateStart' , 'ValabilitateStart' , 'required');
  $this->form_validation->set_rules('valabilitateFinal' , 'ValabilitateFinal' , 'required');
  
  if($this->form_validation->run() === FALSE ) { 
  
	$this->load->view('header');
	$this->load->view('jobs/create', $data);
	$this->load->view('footer');
  
  }

  
  //$this->jobs_model->create_job();
  $this->session->set_flashdata('job_created', 'Jobul a fost adaugat!');
  
  redirect('LiveTable');
  
 }

 public function edit()
 {

  $data=[];
  $data['jobs'] = array(
   $this->input->post('table_column') => $this->input->post('value')
  );

  $this->livetable_model->update($data, $this->input->post('id'));
  $this->load->view('header');
  $this->load->view('jobs/edit',$data);
  $this->load->view('footer');
  
 }

 public function delete()
 {
  $data=[];
  $data['jobs'] = array(
   $this->input->post('table_column') => $this->input->post('value')
  );
  $this->livetable_model->delete($this->input->jobs('id'));

  $this->load->view('header');
  $this->load->view("jobs/live_table", $data);
  $this->load->view('footer');
 }

 public function details()
 {
	  
      $this->load->helper('form');
	    $data = [];
      $data['title'] = 'Details';
      $data['jobs'] = $this->jobs_model->get_jobs();
      $job_id = $data['jobs']['id'];

      if(empty($data['jobs'])){
        show_404();
      }

      $data['title'] = $data['jobs']['title'];


      $this->load->view('header');
      $this->load->view('jobs/details', $data);
      $this->load->view('footer');
      
  }

 }
 

