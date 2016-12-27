<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Droits extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('droit','d');
}
	public function index()
	{
		var_dump($this->d->get_all());
		
	}

	public function show($id=0){
var_dump($this->d->get($id));
		

	}

	public function showby($status=''){
	var_dump($this->d->get_many_by('droit',$status)   );	
	}






}

/* End of file droit.php */
/* Location: ./application/controllers/droit.php */