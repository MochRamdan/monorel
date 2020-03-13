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
    
    $this->load->view('header');
    $this->load->view('lkk/v_lkk', $result);
  }

  function add_lkk()
  {
    $this->load->view('header');
    $this->load->view('lkk/form_lkk');
  }

  function save()
  {
    $nama_lkk = $this->input->post('name');
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
}
