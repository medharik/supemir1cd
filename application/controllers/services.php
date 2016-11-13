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
		
		$data=array(
'designation'=> $this->input->post('designation'),
'prix'=> $this->input->post('prix'),
'unite'=> $this->input->post('unite')


			);
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
		
		$data=array(
'designation'=> $this->input->post('designation'),
'prix'=> $this->input->post('prix'),
'unite'=> $this->input->post('unite')


			);
		$this->s->update($id,$data);
		$this->session->set_flashdata('message', 'service modifié avec succès');
		redirect('services/index','refresh');
	} else {

$data['service']=$this->s->get($id);
		$this->load->view('services/update',$data);
	}

	
	}


}

/* End of file services.php */
/* Location: ./application/controllers/services.php */