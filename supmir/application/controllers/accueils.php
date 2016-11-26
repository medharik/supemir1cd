<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueils extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('service','s');
}

	public function index()
	{
		var_dump($this->s->get_all());


	}

public function add(){

}

public function delete(){
	
}

function update (){

}

function new(){

}



}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */