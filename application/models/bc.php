<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bc extends MY_Model {

	public $_table="bc";
//public $parimay_key='id';
 public $has_many = array( 'service_bcs' =>
  array( 'model' => 'service_bc' ,'primary_key' => 'bc_id')
  );
public function __construct()
{
	parent::__construct();
	
}


}

/* End of file bc.php */
/* Location: ./application/models/bc.php */