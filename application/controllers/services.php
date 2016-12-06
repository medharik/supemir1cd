<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
public function __construct()
{
	parent::__construct();
//	$this->load->helper('form');
//	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->model('service','s');
	//$this->load->library('session');
$this->output->enable_profiler(TRUE);
}
public function index()
	{
		$data['services']=$this->s->get_all();
		$data['titre']='listes des '. count($this->s->get_all()).' services';
		
		$this->load->view('services/index', $data);
	}
public function  show($id){
$data['service']= $this->s->get($id);
$this->load->view('services/show', $data, FALSE);
}
//préparer l'ajout //get //affiche un formulaire d'ajout 
function news(){
	$data['titre']='Nouveau service';

$this->load->view('services/add',$data);
}
//ajouter // post
public function create(){
	$this->form_validation->set_rules('designation', 'désignation', 'trim|required');
$this->form_validation->set_error_delimiters("<h2 style='color:red;text-align:center'>","</h2>");
if ($this->form_validation->run() == TRUE ) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '100';//ko
				/*$config['max_width']  = '1024';
				$config['max_height']  = '768';
				$config['file_name'] = $new_name;
				*/
				
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('photo')){
					$data = array('erreur' => $this->upload->display_errors("<p style='color:purple'>","</p>"));
			 	return $this->load->view('services/add', $data);
	//echo "erreur";
			
				}
				else{
				/*	$data['photo'] =  $this->upload->data('file_name');
					var_dump($data);
					echo "success";
					exit();*/
//$this->load->view('services/index', $data, FALSE);
				}

$data=$this->input->post();

array_pop($data);//pour supprimer ok
$data['photo']=$this->upload->data('file_name');
//var_dump($data);
$this->s->insert($data);

redirect('services/index','refresh');
//var_dump($data);
} else {
	//$this->news();
	//$data['erreur']='Erreur 1';
	$this->load->view('services/add');
}
}
//supprimer //get
public function delete($id=0){
	if(!empty($id) && is_int($id)){
	$this->s->delete(intval($id));
}else{
	$s=$this->input->post('s');
	//var_dump($s);
	foreach ($s as $v) {
		
		
		
		$this->s->delete(intval($v));
	}
	
}redirect('services/index','refresh');
}
//préparer la modif //get affiche un formaulaire de modif get
function edit($id){
$data['service']=$this->s->get($id);
$this->load->view('services/update', $data, FALSE);
}
//modifier // put
function update (){
	$config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']  = '100';
	$config['max_width']  = '1024';
	$config['max_height']  = '768';
	
	$this->load->library('upload', $config);
	
	if ( ! $this->upload->do_upload('photo')){
		$data = array('error' => $this->upload->display_errors());
		$this->session->set_flashdata('message',  $this->upload->display_errors("<p style='color:purple'>","</p>"));
		return  $this->edit($this->input->post('id'));
			
		//return $this->load->view('services/edit', $data, FALSE);
	}
	else{
		//$data = array('upload_data' => $this->upload->data('file_name'));
		echo "success";
	}
$service=$this->input->post();
array_pop($service);
$id=$this->input->post('id');
$service['photo']=$this->upload->data('file_name');
$this->s->update($id,$service);
$this->session->set_flashdata('message', 'Service modifié '.strip_tags($service['designation']).' avec succès');
redirect('s/','refresh');
}
}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */