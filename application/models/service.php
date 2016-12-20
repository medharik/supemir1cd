<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MY_Model {


public function __construct()
{
	parent::__construct();
	
	$this->table='service';
}



}

/* End of file service.php */
/* Location: ./application/models/service.php */