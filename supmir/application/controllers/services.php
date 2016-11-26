<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
public function __construct()
{
	parent::__construct();
//	$this->load->helper('form');
//	$this->load->helper('url');
	$this->load->model('service','s');
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
	$data=$this->input->post();
	array_pop($data);//pour supprimer ok
$this->s->insert($data);
redirect('services/index','refresh');

}
//supprimer //get
public function delete($id){
	$this->s->delete(intval($id));
		redirect('services/index','refresh');
}
//préparer la modif //get affiche un formaulaire de modif
function edit($id){

}
//modifier // put
function update (){

}





}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */