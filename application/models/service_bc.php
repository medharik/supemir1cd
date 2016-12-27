<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_bc extends MY_Model {

public $_table='service_bc';
public $primary_key='id';
    public $belongs_to = array( 'bc' => array( 'model' => 'bc', 'primary_key'=>'bc_id') ,'service' => array( 'model' => 'service', 'primary_key'=>'service_id' ) );
   // public $belongs_to = array( 'service' => array( 'model' => 'service' ) );

public function __construct()
{
	parent::__construct();
	
}
	

}

/* End of file service_bc.php */
/* Location: ./application/models/service_bc.php */