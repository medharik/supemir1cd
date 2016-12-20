<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Model {


public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function insert($data=array())
	{
		$this->db->insert('service', $data);
		return $this->db->insert_id();
		
	}
	public function update($id,$data=array())
	{
		$this->db->where('id',$id)
		->update('service', $data);

	return 	$this->db->affected_rows();
	}
	public function delete($id)
	{ $this->db->where('id',$id)
		->delete('service');
		return $id;

	}
	public function get($id)
	{
		$r= $this->db->select('*')->from('service')->where('id',$id)->get()->result();
		return $r[0];
		
	}
	public function get_all($npage,$offset)
	{
		return $this->db
		->from('service')
		->limit($npage,$offset)
		->get()
		->result();
		
	}
	public function get_by($where=array())
	{
		if(is_array($where)){
		return $this->db->select('*')->from('service')->where($where)->get()->result();
	}else 
		return $this->db->select('*')->from('service')->where($where)->get()->result();
	}


	public function count_all(){
return $this->db->count_all_results('service');

	}

}

/* End of file service.php */
/* Location: ./application/models/service.php */