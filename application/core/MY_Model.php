<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
public $table;

public function __construct()
{
	parent::__construct();
	
	$this->load->database();
	
}

public function get_all($nb,$debut){

				return $this->db->select('*')
				 ->from($this->table)
				 -> limit($nb,$debut)								 
				 ->get()
				 ->result();
				}
public function insert($data=array()){
$this->db->insert($this->table,$data);
return $this->db->insert_id();


}
	public function delete($id){

$this->db->where('id',$id)->delete($this->table);
	}
	public function update($id,$data=array()){
$this->db->where('id',$id)
         ->update($this->table, $data);
	}
	public function get($id){
	$service=	$this->db->select('*')
				 ->from($this->table)
				 ->where('id',$id)
				 ->get()
				 ->result();
			return $service[0];	 

}

public function get_by($where){

	return $this->db->select('*')
			  ->where($where)
			  ->from($this->table)
			  ->get()
			  ->result();

}

public function get_by_page($nb,$debut){

	return $this->db->select('*')
			  ->where($where)
			  ->from($this->table)
			  ->limit($nb,$debut)
			  ->get()
			  ->result();


}
function count_all(){
	return $this->db->count_all_results($this->table);
}	

}

/* End of file service.php */
/* Location: ./application/models/service.php */