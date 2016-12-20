<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public $css=array();
	public $js=array();
	public $entete=array();
public function __construct()
{
	parent::__construct();
//	$this->load->helper('form');
//	$this->load->helper('url');
	$this->load->library('form_validation');
	$this->load->model('service','s');
	//$this->load->library('session');
$this->entete=array("photo"=>"<img src=''>","designation"=>'désignation','prix'=>'prix','unite'=>'unité','operation'=>'<a href=\"http://localhost/supemir1/s/25/delete\" onclick=\"return confirm(\'voulez vous vrm supprimer cet élément?\')\" class=\"btn btn-danger\">Supprimer</a>
<a href=\"http://localhost/supemir1/s/25/edit \" class=\"btn btn-warning\">Modifier</a>
			<a href=\"http://localhost/supemir1/s/25\" class=\"btn btn-success\">Consulter</a>');
	//css
$this->css=array('bootstrap.min.css','jquerydatatables.min.css');
$this->js=array('jquery.min.js','jquerydatatables.min.js','bootstrap.min.js');
	//fin css
$this->output->enable_profiler(TRUE);
}
public function index($debut=0)
	{
		$this->load->library('pagination');
		
		$config['base_url'] = site_url('services/index');
		$total=$config['total_rows'] = $this->s->count_all();
		$nb=$config['per_page'] = 4;
		$config['num_links'] = $total/4 -1;	
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'Début';
		$config['first_tag_open'] = '<span>';
		$config['first_tag_close'] = '</span>';
		$config['last_link'] = 'Fin';
		$config['last_tag_open'] = '<span>';
		$config['last_tag_close'] = '</span>';
		$config['next_link'] = 'Suivant';
		$config['next_tag_open'] = '<span>';
		$config['next_tag_close'] = '</span>';
		$config['prev_link'] = 'Précédant';
		$config['prev_tag_open'] = '<span>';
		$config['prev_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		$config['attributes'] = array('class'=>'pages');
		
		

		$this->pagination->initialize($config);
		
		$data['pages']= $this->pagination->create_links();
			
$data['css']=$this->css;

$data['js']=$this->js;
if(empty($nb)) $nb=0;
if(empty($debut)) $debut=0;

$data['services']=$this->s->get_all($nb,$debut);
		$data['titre']='listes des  '.$total.' services';
		$data['nombre_services']=$total;
		$this->load->view('services/index', $data);
	}
public function  show($id){
$data['service']= $this->s->get($id);
$this->load->view('services/show', $data, FALSE);
}
//préparer l'ajout //get //affiche un formulaire d'ajout 
function news(){
	$data['titre']='Nouveau service';

$this->load->view('services/add',$data);
}
//ajouter // post
public function create(){
	$this->form_validation->set_rules('designation', 'désignation', 'trim|required');
	$this->form_validation->set_rules('prix', 'Prix', 'trim|required|is_numeric');

$this->form_validation->set_error_delimiters("<span style='color:red;text-align:center'>","</>");

if ($this->form_validation->run() == TRUE ) {
//upload
$config['upload_path'] = './images/';
$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
$config['max_size']  = '100';//en KO
//$config['max_width']  = '1024';
//$config['max_height']  = '768';

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload('photo')){
	$data=array();
	$data['erreur']=$this->upload->display_errors("<p style='color:purple;text-align:center'>","</p>");
	return $this->load->view('services/add', $data, FALSE);
}
/*else{
	//$data = array('upload_data' => $this->upload->data());
	//echo "success";
	//var_dump($this->upload->data());
	//die("success");
}*/

//fin upload


			$data=$this->input->post();



array_pop($data);//pour supprimer ok
$data['photo']=$this->upload->data('file_name');
$this->s->insert($data);
$this->session->set_flashdata('message', 'produit ajouté avec succès');
redirect('services/index','refresh');
//var_dump($data);
} else {
	//$this->news();
	//$data['erreur']='Erreur 1';
	$this->load->view('services/add');
}
}
//supprimer //get
public function delete($id){
	if($id!=0){
	$this->s->delete(intval($id));
}else{
	$ss=$this->input->post('ss');
foreach ($ss as $v) {
	$this->s->delete($v);
}
}
	
redirect('services/index','refresh');
}
//préparer la modif //get affiche un formaulaire de modif get
function edit($id){
$data['service']=$this->s->get($id);
$this->load->view('services/update', $data, FALSE);
}
//modifier // put
function update (){
	$config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']  = '100';
	$config['max_width']  = '1024';
	$config['max_height']  = '768';
	
	
$service=$this->input->post();
array_pop($service);
$id=$this->input->post('id');
$this->s->update($id,$service);
$this->session->set_flashdata('message', 'Service modifié '.strip_tags($service['designation']).' avec succès');
redirect('s/','refresh');
}


function datatable()
    {
    	$this->load->library('datatables');
        $this->datatables->select('designation,prix,unite')
          
            ->from('service');
 
        echo $this->datatables->generate();
    }

}

/* End of file accueils.php */
/* Location: ./application/controllers/accueils.php */