<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout
{
	protected $ci;
	public $v=array();


	public function __construct()
	{
        $this->ci =& get_instance();
$this->v=array();
$this->v['theme']='theme';
$this->v['pages']="";
$this->v['titre']="mon site web theme";
$this->v['menu']=array('services'=>'s/','Bons de commandes'=>'bcs/','droits'=>'droits/');
	}


public function views($page,$data=array())
{	

	$this->v['pages'].=$this->ci->load->view($page, $data, TRUE);
return $this;
}
	

public function view($page,$data=array())
{$this->ci->load->view('menu',$this->v);
	$this->v['pages'].=$this->ci->load->view($page, $data, TRUE);
$this->ci->load->view($this->v['theme'],$this->v);
$this->ci->load->view('footer');

}
}

/* End of file Layout.php */
/* Location: ./application/libraries/Layout.php */
