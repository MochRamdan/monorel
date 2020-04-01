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
    $this->load->model('M_pagu');
    $this->load->model('M_kategori');
    $this->load->model('M_satuan');
  }

  function pagu_report(){
    $this->load->view('headerTwo');
    $this->load->view('laporan/report_pagu');
  }

  function realisasi_report(){
    $this->load->view('headerTwo');
    $this->load->view('laporan/report_realisasi');
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
    
  }

}
