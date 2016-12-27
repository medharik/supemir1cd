<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bcs extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('bc');
		$this->load->model('service_bc','sb');
		$this->load->model('service','s');
$this->output->enable_profiler(true);
$this->output->delete_cache();
$this->load->library('layout');
$this->load->helper('url');

}
	public function index()
{
var_dump($this->bc->get_all());

}

public function bcservices($id=0)
{

	$bc=($this->bc->with('service_bcs')->with('service')->get($id));
	//var_dump($bc);
	$data['bc']=$bc;
;
$this->layout->v['menu']=array_merge($this->layout->v['menu'],array('rien'=>'rien'));
	var_dump($this->layout->v['menu']);
	$this->layout->views('_header')
	->view('bcs/index',$data);
	;
}
}

/* End of file bcs.php */
/* Location: ./application/controllers/bcs.php */