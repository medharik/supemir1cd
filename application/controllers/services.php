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
		$this->output->enable_profiler(TRUE);
}
	public function index($npage=0)
	{

$this->load->library('pagination');

$config['base_url'] = base_url().'services/index';
$config['total_rows'] = $this->s->count_all();
$config['per_page'] = 4;
$config['num_links'] = 3;


$this->pagination->initialize($config);

$data['pages']= $this->pagination->create_links();

$data['services']=$this->s->get_all(0,10);

	
		

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
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		
		$this->load->library('upload', $config);
	$this->upload->initialize($config); 
		if ( ! $this->upload->do_upload('photo')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('services/add', $error, FALSE);
		echo"erreur<br>";
		var_dump($this->upload->data());
		}
		else{
		//	$data = array('upload_data' => $this->upload->data());
			//echo "success";
			//$data['photo']='uploads/'.$this->upload->data('file_name');
$data=array('designation'=>$this->input->post('designation'),
	'prix'=>$this->input->post('prix'),
	'photo'=>'uploads/'.$this->upload->data('file_name'),
	'unite'=>$this->input->post('unite'));
		array_pop($data);
		unset($data['id']);
		$this->s->insert($data);
		$this->session->set_flashdata('message', 'service ajouté avec succès');
		redirect('services/index','refresh');

	
		}
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
		

//$data=$this->input->post(NULL,TRUE);
$data=array('designation'=>$this->input->post('designation'),
	'prix'=>$this->input->post('prix'),
	//'photo'=>'uploads/'.$this->upload->data('file_name'),
	'unite'=>$this->input->post('unite'),);
		$this->s->update($id,$data);
		$this->session->set_flashdata('message', 'service modifié avec succès');
	redirect('services/index','refresh');
	} else {
	$data['e']='block';
	$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
	$data['service']=$this->s->get($id);
		//$this->update($id);
	$this->load->view('services/update', $data, FALSE);
	}

	
	}


}

/* End of file services.php */
/* Location: ./application/controllers/services.php */