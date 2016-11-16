<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
public function __construct()
{
	parent::__construct();
	
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

public function add(){

}

public function delete(){
	
}

function update (){

}

function news(){

}



}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */