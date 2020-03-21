<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagu extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE ){
      redirect("Login");
    }
    //load model here
    $this->load->model('M_lkk');
    $this->load->model('M_pagu');
  }

  function index()
  {
  	$this->load->view('headerLte');
    $this->load->view('pagu/view_pagu');
  }

  function data(){
    $data=$this->M_pagu->get_data()->result();
    echo json_encode($data);
  }

  function save()
  {
  	$lkk_id = $this->input->post('daftar_lkk');
    $pagu = $this->input->post('pagu');

    $pagu = preg_replace("/[^0-9]/", "", $pagu);

    $data = array(
    	'lkk_id' => $lkk_id,
      'pagu' => $pagu
    );
    $result = $this->M_pagu->add_pagu($data);

    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function get_edit($id){
  	$data['nilai'] = $this->M_pagu->get_edit($id);

  	$data['lkk'] = $this->M_lkk->list_lkk();

    echo json_encode($data);
  }

  function update_pagu(){
  	$id = $this->input->post('pagu_id');
  	$lkk_id = $this->input->post('daftar_lkk');
  	$pagu = $this->input->post('pagu');

    $data = array(
      'lkk_id' => $lkk_id,
      'pagu' => $pagu
    );

    $result = $this->M_pagu->update_pagu($id, $data);
    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function delete($id){
  	$data = $this->M_pagu->delete($id);

    echo json_encode($data);
  }

}
