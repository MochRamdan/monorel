<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Realisasi extends CI_Controller
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
    $this->load->model('M_kategori');
    $this->load->model('M_satuan');
  }

  function index()
  {
    $realisasi = $this->M_realisasi->get_data()->result_array();

    $pagu = $this->M_pagu->get_data()->result_array();

    foreach ($pagu as $key => $value) {

      foreach ($realisasi as $keyy => $valuee) {
        if ($value['pagu_id'] == $valuee['pagu_id']) {
          //data untuk to view
          $data['anggaran'][$key]['pagu_id'][] = $valuee['pagu_id'];
          $data['anggaran'][$key]['pagu'][] = $valuee['pagu'];
          $data['anggaran'][$key]['nama_lkk'][] = $valuee['name'];
          $data['anggaran'][$key]['realisasi_id'][] = $valuee['realisasi_id'];
          $data['anggaran'][$key]['anggaran'][] = $valuee['anggaran'];
        } 
      }
    }

  	$this->load->view('headerLte');
    $this->load->view('realisasi/view_realisasi',$data);
  }

  function get_realisasi(){
    $data['pagu'] = $this->M_pagu->get_data()->result();

    $data['kategori'] = $this->M_kategori->get_data()->result();

    $data['satuan'] = $this->M_satuan->get_data()->result();

    echo json_encode($data);
  }

  function edit_detail($id){
    $data['pagu'] = $this->M_pagu->get_data()->result();

    $data['kategori'] = $this->M_kategori->get_data()->result();

    $data['satuan'] = $this->M_satuan->get_data()->result();

    $data['realisasi'] = $this->M_realisasi->edit_detail($id);

    echo json_encode($data);
  }

  function data(){
    //from ajax
    $realisasi = $this->M_realisasi->get_data()->result_array();

    $pagu = $this->M_pagu->get_data()->result_array();

    foreach ($pagu as $key => $value) {

      foreach ($realisasi as $keyy => $valuee) {
        if ($value['pagu_id'] == $valuee['pagu_id']) {
          //data untuk array sum
          $data['anggaran'][$key]['pagu_id'][] = $valuee['pagu_id'];
          $data['anggaran'][$key]['anggaran'][] = $valuee['anggaran'];
        }
        
      }

    }

    $data['realisasi'] = $realisasi;
    $data['pagu'] = $pagu;

    echo json_encode($data);
  }

  function save()
  {
  	$lkk = $this->input->post('lkk');
    $kategori = $this->input->post('kategori');
    $satuan = $this->input->post('satuan');
    $tanggal = date('Y-m-d');
    $volume = $this->input->post('volume');
    $anggaran = $this->input->post('anggaran');
    $keterangan = $this->input->post('keterangan');

    $anggaran = preg_replace("/[^0-9]/", "", $anggaran);

    $data = array(
    	'pagu_id' => $lkk,
      'kategori_id' => $kategori,
      'satuan_id' => $satuan,
      'tanggal' => $tanggal,
      'volume' => $volume,
      'anggaran' => $anggaran,
      'keterangan' => $keterangan
    );
    $result = $this->M_realisasi->add_realisasi($data);

    $msg['success'] = $result;

    echo json_encode($msg);
  }

  function get_detail($id){
    $data['detail'] = $this->M_realisasi->get_detail($id)->result();

    echo json_encode($data);
  }

  function get_edit($id){
  	$data['nilai'] = $this->M_pagu->get_edit($id);

  	$data['lkk'] = $this->M_lkk->list_lkk();

    echo json_encode($data);
  }

  function update_detail(){
  	$id = $this->input->post('realisasi_id');

  	$lkk = $this->input->post('lkk');
    $kategori = $this->input->post('kategori');
    $satuan = $this->input->post('satuan');
    $tanggal = date('Y-m-d');
    $volume = $this->input->post('volume');
    $anggaran = $this->input->post('anggaran');
    $keterangan = $this->input->post('keterangan');

    $anggaran = preg_replace("/[^0-9]/", "", $anggaran);

    $data = array(
      'pagu_id' => $lkk,
      'kategori_id' => $kategori,
      'satuan_id' => $satuan,
      'tanggal' => $tanggal,
      'volume' => $volume,
      'anggaran' => $anggaran,
      'keterangan' => $keterangan
    );

    $result = $this->M_realisasi->update_detail($id, $data);

    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function delete($id){
  	$data = $this->M_realisasi->delete($id);

    echo json_encode($data);
  }

}
