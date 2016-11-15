<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('service','s');
	$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('_header.php');
}
	public function index()
	{
		$data['services']=$this->s->get_all();

		$this->load->view('services/index', $data, FALSE);


	}


	public function show($id)
	{
		$data['services']=$this->s->get($id);
		var_dump($data['services']);
		
	}


	public function add()
	{
		$this->form_validation->set_rules('prix', 'Prix', 'trim|required|min_length[1]|max_length[12]');
	if ($this->form_validation->run() == TRUE) {
		
		$data=$this->input->post();
		array_pop($data);
		$this->s->insert($data);
		$this->session->set_flashdata('message', 'service ajouté avec succès');
		redirect('services/index','refresh');
	} else {
		$this->load->view('services/add');
	}
		
		
	}
	
	public function delete($id)
	{
		$this->s->delete($id);
		$this->session->set_flashdata('message', 'Service supprimé avec succès');
		redirect('services/index','refresh');
	}
	public function update($id)
	{
		
		$this->form_validation->set_rules('prix', 'Prix', 'trim|required|min_length[1]|max_length[12]');
	if ($this->form_validation->run() == TRUE) {
		
		$data=$this->input->post(NULL,TRUE);

		$this->s->update($id,$data);
		$this->session->set_flashdata('message', 'service modifié avec succès');
		redirect('services/index','refresh');
	} else {
	$data['e']='block';
	$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
	$data['service']=$this->s->get($id);
		$this->update($id);
	}

	
	}


}

/* End of file services.php */
/* Location: ./application/controllers/services.php */