<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Model {


public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function insert($object)
	{
		$this->db->insert('service', $object);
		return $this->db->insert_id();
		
	}
	public function update($id,$object)
	{
		$this->db->where('id',$id)
		->update('service', $object);

		
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
	public function get_all()
	{return $this->db->get('service')->result();
		
	}
	public function get_by($where=array())
	{
		if(is_array($where)){
		return $this->db->select('*')->from('service')->where($where)->get()->result();
	}else 
		return $this->db->select('*')->from('service')->where($where)->get()->result();
	}

}

/* End of file service.php */
/* Location: ./application/models/service.php */