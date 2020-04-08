<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
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
    $this->load->model('M_laporan');
    $this->load->model('M_realisasi');
    $this->load->model('M_user');
    $this->load->model('M_pagu');
    $this->load->model('M_kategori');
    $this->load->model('M_satuan');
  }

  function pagu_report(){
    $level = $this->session->userdata['logged_in']['level'];

    if ($level == 1) {
      $this->load->view('headerLte');
      $this->load->view('laporan/adm_report_pagu');
    }else{
      $this->load->view('headerTwo');
      $this->load->view('laporan/report_pagu');
    }
  }

  function realisasi_report(){
    $level = $this->session->userdata['logged_in']['level'];

    if ($level == 1) {
      $this->load->view('headerLte');
      $this->load->view('laporan/adm_report_realisasi');
    }else{
      $this->load->view('headerTwo');
      $this->load->view('laporan/report_realisasi');
    }
  }

  function get_year(){
    $data['year'] = $this->M_pagu->get_year()->result_array();

    echo json_encode($data);
  }

  function get_data($tahun){
    //id session
    $id = $this->session->userdata['logged_in']['id'];

    $data['pagu'] = $this->M_laporan->get_data_year($id, $tahun)->result();

    echo json_encode($data);
  }

  function realisasi_form(){
    $data['year'] = $this->M_pagu->get_year()->result_array();

    $data['kategori'] = $this->M_kategori->get_data()->result_array();

    $push = array('nama_kategori' => "Semua");

    array_push($data['kategori'], $push);

    echo json_encode($data);
  }

  function get_realisasi(){
    //get session id
    $id = $this->session->userdata['logged_in']['id'];

    $tahun = $this->input->post('tahun');
    $kategori = $this->input->post('kategori');

    if ($kategori == "Semua") {
      $data = $this->M_laporan->get_by_all_kategori($id, $tahun)->result_array();
    }else{
      $data = $this->M_laporan->get_by_kategori($id, $tahun, $kategori)->result_array();
    }

    //if $data kosong
    if (empty($data)) {
      $data = array();
    }else{
      $data = $data;
    }

    echo json_encode($data);
  }

  function adm_pagu_form(){
    $data['year'] = $this->M_pagu->get_year()->result_array();

    $data['user'] = $this->M_user->get_data()->result_array();

    echo json_encode($data);
  }

  function adm_pagu(){
    //get session id
    $id = $this->session->userdata['logged_in']['id'];

    $tahun = $this->input->post('tahun');
    $user = $this->input->post('user');

    if ($user == $id) {
      $data = $this->M_laporan->adm_all_pagu($tahun)->result_array();
    }else{
      $data = $this->M_laporan->adm_by_user($tahun, $user)->result_array();
    }

    echo json_encode($data);
  }

  function adm_realisasi_form(){
    $data['year'] = $this->M_pagu->get_year()->result_array();

    $data['user'] = $this->M_user->get_data()->result_array();

    $data['kategori'] = $this->M_kategori->get_data()->result_array();

    $push = array('nama_kategori' => "Semua");

    array_push($data['kategori'], $push);

    echo json_encode($data);
  }

  function adm_realisasi(){
    //get session id
    $id = $this->session->userdata['logged_in']['id'];

    $tahun = $this->input->post('tahun');
    $user = $this->input->post('user');
    $kategori = $this->input->post('kategori');

    if (($user == $id)&&($kategori == "Semua")) {
      $data = $this->M_laporan->by_year($tahun)->result_array();
    }
    elseif ($user == $id) {
      $data = $this->M_laporan->by_year_kategori($tahun, $kategori)->result_array();
    }
    elseif ($kategori == "Semua") {
      $data = $this->M_laporan->by_year_user($tahun, $user)->result_array();
    }
    else{
      $data = $this->M_laporan->by_year_user_kategori($tahun, $user, $kategori)->result_array();
    }

    echo json_encode($data);
    
  }

}
