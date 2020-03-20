<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE ){
      redirect("Login");
    }
    //load model here
    $this->load->model('M_kategori');
  }

  function index()
  {
    $this->load->view('headerLte');
    $this->load->view('kategori/view_kategori');
  }

  function save(){
    $nama_kategori = $this->input->post('nama_kategori');
    $data = array(
      'nama_kategori' => $nama_kategori
    );
    $result = $this->M_kategori->add_kategori($data);

    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function data(){
    $data = $this->M_kategori->get_data()->result();
    echo json_encode($data);
  }

  function get_edit($id){
    $data = $this->M_kategori->get_edit($id);
    echo json_encode($data);
  }

  function update_kategori(){
    $id = $this->input->post('kategori_id');
    $data = array(
      'nama_kategori' => $this->input->post('nama_kategori')
    );

    $result = $this->M_kategori->update_kategori($id, $data);
    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function delete($id){
    $data = $this->M_kategori->delete($id);

    echo json_encode($data);
  }

}
