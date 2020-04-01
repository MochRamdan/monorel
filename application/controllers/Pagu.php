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
    //helper
    $this->load->helper('date');
    date_default_timezone_set("Asia/Jakarta");

    //load model here
    $this->load->model('M_lkk');
    $this->load->model('M_pagu');
    $this->load->model('M_user');
  }

  function index()
  {
    $level = $this->session->userdata['logged_in']['level'];

    if ($level == 2) 
    {
      $this->load->view('headerTwo');
      $this->load->view('pagu/view_pagu');     
    }
    else
    {
      $this->load->view('headerLte');
      $this->load->view('pagu/adm_pagu');
    }
  }

  function data(){
    //get id dari session
    $id = $this->session->userdata['logged_in']['id'];

    $data = $this->M_pagu->get_data_pagu($id)->result();
    echo json_encode($data);
  }

  function data_adm(){
    //get year now
    $format = "%Y";
    $year = mdate($format);

    $pagu = $this->M_pagu->get_data_adm()->result_array();

    $admin = $this->M_user->get_data()->result_array();

    foreach ($admin as $key => $value) {
      foreach ($pagu as $keyy => $valuee) {
        if (($value['admin_id'] == $valuee['admin_id']) && ($valuee['tahun'] == $year)) {
          $data['pagu'][$key]['pagu_id'][] = $valuee['pagu_id'];
          $data['pagu'][$key]['admin_id'][] = $valuee['admin_id'];
          $data['pagu'][$key]['tahun'][] = $valuee['tahun'];
          $data['pagu'][$key]['username'][] = $value['username'];
          $nilai['pagu'][$key]['pagu'][] = $valuee['pagu'];

          // $pagu[$key]['pagu'] = $valuee['pagu'];
        }
      }
    }

    foreach ($nilai['pagu'] as $x => $y) {
      $data['pagu'][$x]['pagu'][] = array_sum($y['pagu']);
    }

    echo json_encode($data);
  }

  function save()
  {
    $admin_id = $this->session->userdata['logged_in']['id'];
  	$lkk_id = $this->input->post('daftar_lkk');
    //year now
    // $format = "%Y-%m-%d %h:%i %A";
    $format = "%Y";
    $year = mdate($format);

    $pagu = $this->input->post('pagu');

    $pagu = preg_replace("/[^0-9]/", "", $pagu);

    $data = array(
      'admin_id' => $admin_id,
    	'lkk_id' => $lkk_id,
      'tahun' => $year,
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

    $id_sess = $this->session->userdata['logged_in']['id'];
  	$lkk_id = $this->input->post('daftar_lkk');

    //year now
    // $format = "%Y-%m-%d %h:%i %A";
    $format = "%Y";
    $year = mdate($format);

  	$pagu = $this->input->post('pagu');

    //hilangkan varchar
    $pagu = preg_replace("/[^0-9]/", "", $pagu);

    $data = array(
      'admin_id' => $id_sess,
      'lkk_id' => $lkk_id,
      'tahun' => $year,
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

  function get_detail($id){
    //year now
    $format = "%Y";
    $year = mdate($format);

    $arr = array(
      'tb_pagu.admin_id' => $id,
      'tb_pagu.tahun' => $year
    );

    $data['detail'] = $this->M_pagu->get_detail($arr)->result();

    echo json_encode($data);
  }

}
