<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE ){
      redirect("Login");
    }
    //load model here
    $this->load->model('M_realisasi');
    $this->load->model('M_pagu');
  }

  public function index()
  {
    //ambil id dari session
    $id = $this->session->userdata['logged_in']['id'];
    //ambil level dari session
    $level = $this->session->userdata['logged_in']['level'];

    //get data from model
    if ($level == 1) {
      $realisasi = $this->M_realisasi->get_data()->result_array();

      $pagu = $this->M_pagu->get_pagu_adm()->result_array();
    }else{
      $realisasi = $this->M_realisasi->get_data_adm($id)->result_array();

      $pagu = $this->M_pagu->get_data_pagu($id)->result_array();
    }

    //logic from view
    if (empty($realisasi))
    {
      $data['anggaran'] = array();
    }
    else
    {
      foreach ($pagu as $key => $value) {

        foreach ($realisasi as $keyy => $valuee) {
          if ($value['pagu_id'] == $valuee['pagu_id']) {
            //data untuk to view
            $data['anggaran'][$key]['tahun'][] = $value['tahun'];
            $data['anggaran'][$key]['username'][] = $value['username'];

            $data['anggaran'][$key]['pagu_id'][] = $valuee['pagu_id'];
            $data['anggaran'][$key]['pagu'][] = $valuee['pagu'];
            $data['anggaran'][$key]['nama_lkk'][] = $valuee['name'];
            $data['anggaran'][$key]['realisasi_id'][] = $valuee['realisasi_id'];
            $data['anggaran'][$key]['anggaran'][] = $valuee['anggaran'];
          } 
        }
      }
    }

    //logic untuk total keseluruhan
    //jika pagu kosong
    if (!empty($pagu)) {
      //loop pagu
      foreach ($pagu as $k => $v) {
        $getpagu[$k] = $v['pagu'];
      }

      //loop realisasi
      foreach ($realisasi as $k => $v) {
        $getrealisasi[$k] = $v['anggaran'];
      }
      //menjumlahkan data
      $data['sum_pagu'] = array_sum($getpagu);
      $data['sum_realisasi'] = array_sum($getrealisasi);

      //selisih data
      $data['sisa_realisasi'] = ($data['sum_pagu']-$data['sum_realisasi']);
      //persentase data
      $persen_realisasi = ($data['sum_realisasi']/$data['sum_pagu'])*100;
      $data['bulat_persen'] = number_format($persen_realisasi,2);
    }else{
      $data['sum_pagu'] = 0;
      $data['sum_realisasi'] = 0;
      $data['sisa_realisasi'] = 0;
      $data['bulat_persen'] = 0;
    }

    //header adm
    if ($level == '1') 
    {
      $this->load->view('headerLte');
    }
    else
    {
      $this->load->view('headerTwo');
    }

    $this->load->view('dashboard/dashboard', $data);
    $this->load->view('footerLte');
  }
}
