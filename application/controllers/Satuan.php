<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE ){
      redirect("Login");
    }
    //load model here
    $this->load->model('M_satuan');
  }

  function index()
  {
    $this->load->view('headerLte');
    $this->load->view('satuan/view_satuan');
  }

  function save()
  {
    $nama_satuan = $this->input->post('nama_satuan');
    $data = array(
      'nama_satuan' => $nama_satuan
    );
    $result = $this->M_satuan->add_satuan($data);

    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function data(){
    $data = $this->M_satuan->get_data()->result();
    echo json_encode($data);
  }

  function get_edit($id){
    $data = $this->M_satuan->get_edit($id);
    echo json_encode($data);
  }

  function update_satuan(){
    $id = $this->input->post('satuan_id');
    $data = array(
      'nama_satuan' => $this->input->post('nama_satuan')
    );

    $result = $this->M_satuan->update_satuan($id, $data);
    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function delete($id){
    $data = $this->M_satuan->delete($id);

    echo json_encode($data);
  }

  function get_lkk(){
    $data['lkk'] = $this->M_satuan->get_lkk()->result_array();

    echo json_encode($data);
  }
}
