<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueils extends CI_Controller {

	public function index()
	{
		//$data['titre']='mon titre dynamique';
		$data=array('titre'=>'mon titre ','age'=>'19');
	$this->load->view('accueils/index',$data);
	}

}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */