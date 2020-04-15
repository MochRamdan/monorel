<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    //helper
    $this->load->helper('date');
    date_default_timezone_set("Asia/Jakarta");

    //load model here
    $this->load->model('M_realisasi');
    $this->load->model('M_pagu');
  }

	public function index()
	{
		//get current year
    $format = "%Y";
    $year = mdate($format);

    //get data from model
		$pagu_year = $this->M_pagu->get_by_year($year)->result_array();

    $realisasi_year = $this->M_realisasi->get_by_year($year)->result_array();

    //jika pagu kosong
    if (!empty($pagu_year)) {
      //loop pagu
      foreach ($pagu_year as $k => $v) {
        $getpagu[$k] = $v['pagu'];
      }

      //menjumlahkan data
      $data['sum_pagu'] = array_sum($getpagu);

      if (!empty($realisasi_year)) {
        //loop realisasi
        foreach ($realisasi_year as $k => $v) {
          $getrealisasi[$k] = $v['anggaran'];
        }
        //menjumlahkan data realisasi
        $data['sum_realisasi'] = array_sum($getrealisasi);
        //persentase data
        $persen_realisasi = ($data['sum_realisasi']/$data['sum_pagu'])*100;
        $data['bulat_persen'] = number_format($persen_realisasi,2);
        //selisih data
        $data['sisa_realisasi'] = ($data['sum_pagu']-$data['sum_realisasi']);
      }else{
        $data['sum_realisasi'] = 0;
        $data['bulat_persen'] = 0;
        $data['sisa_realisasi'] = $data['sum_pagu'];
      }
      
    }else{
      $data['sum_pagu'] = 0;
      $data['sum_realisasi'] = 0;
      $data['sisa_realisasi'] = 0;
      $data['bulat_persen'] = 0;
    }

		$this->load->view('pages/welcome', $data);
	}

}
