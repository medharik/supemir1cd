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
}

	public function index()
	{


		$data['services']=$this->s->get_all();
		$data['titre']='listes des services';
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
	$this->form_validation->set_rules('designation', 'désignation', 'trim|required|min_length[2]|max_length[12]|is_unique[service.designation]');

if ($this->form_validation->run() == TRUE ) {

	$data=$this->input->post();
	array_pop($data);//pour supprimer ok
$this->s->insert($data);
redirect('services/index','refresh');

} else {
	//$this->news();
	$data['erreur']='Erreur 1';
	$this->load->view('services/add', $data, FALSE);
}

}
//supprimer //get
public function delete($id){
	$this->s->delete(intval($id));
		redirect('services/index','refresh');
}
//préparer la modif //get affiche un formaulaire de modif get
function edit($id){
$data['service']=$this->s->get($id);
$this->load->view('services/update', $data, FALSE);
}
//modifier // put
function update (){
$service=$this->input->post();
array_pop($service);
$id=$this->input->post('id');
$this->s->update($id,$service);
$this->session->set_flashdata('message', 'Service modifié '.strip_tags($service['designation']).' avec succès');
redirect('s/','refresh');
}



}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */