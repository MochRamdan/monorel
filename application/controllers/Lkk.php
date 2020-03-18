<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lkk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // if($this->session->userdata('logged_in') != TRUE ){
    //   redirect("welcome");
    // }
    //load model here
    $this->load->model('M_lkk');
  }

  function index()
  {
    $result['datas'] = $this->M_lkk->get_data()->result();
    
    $this->load->view('headerLte');
    $this->load->view('lkk/view_lkk');
    // $this->load->view('lkk/view_lkk', $result);
  }

  function add_lkk()
  {
    $this->load->view('header');
    $this->load->view('lkk/form_lkk');
  }

  function save()
  {
    $nama_lkk = $this->input->post('nama_lkk');
    $data = array(
      'name' => $nama_lkk
    );
    $result = $this->M_lkk->add_lkk($data);

    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function data(){
    $data = $this->M_lkk->get_data()->result();
    echo json_encode($data);
  }

  function get_edit($id){
    $data = $this->M_lkk->get_edit($id);
    echo json_encode($data);
  }

  function update_lkk(){
    $id = $this->input->post('lkk_id');
    $data = array(
      'name' => $this->input->post('nama_lkk')
    );

    $result = $this->M_lkk->update_lkk($id, $data);
    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function delete($id){
    $data = $this->M_lkk->delete($id);

    echo json_encode($data);
  }

  function get_lkk(){
    $data['lkk'] = $this->M_lkk->get_lkk()->result_array();

    echo json_encode($data);
  }
}
