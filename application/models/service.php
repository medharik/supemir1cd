<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Model {


public function __construct()
{
	parent::__construct();
	
	$this->load->database();
}

public function get_all(){
return $this->db->select('*')
				 ->from('service')
				 ->get()
				 ->result();
}
public function add($data=array()){
$this->db->insert('service',$data);



}
	public function delete($id){

$this->db->where('id',$id)->delete('service');
	}
	public function update($id,$data=array()){
$this->db->where('id',$id)
         ->update('service', $data);
	}
	public function get($id){
	$service=	$this->db->select('*')
				 ->from('service')
				 ->where('id',$id)
				 ->get()
				 ->result();
			return $service[0];	 

}

public function get_by($where){

	return $this->db->select('*')
			  ->where($where)
			  ->from('service')
			  ->get()
			  ->result();

}


	

}

/* End of file service.php */
/* Location: ./application/models/service.php */