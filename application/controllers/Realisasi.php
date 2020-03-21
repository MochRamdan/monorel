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
  	$this->load->view('headerLte');
    $this->load->view('realisasi/view_realisasi');
  }

  function get_realisasi(){
    $data['pagu'] = $this->M_pagu->get_data()->result();

    $data['kategori'] = $this->M_kategori->get_data()->result();

    $data['satuan'] = $this->M_satuan->get_data()->result();

    echo json_encode($data);
  }

  function data(){
    $data['realisasi'] = $this->M_realisasi->get_data()->result();

    $data['pagu'] = $this->M_pagu->get_data()->result();

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

  function get_edit($id){
  	$data['nilai'] = $this->M_pagu->get_edit($id);

  	$data['lkk'] = $this->M_lkk->list_lkk();

    echo json_encode($data);
  }

  function update_pagu(){
  	$id = $this->input->post('pagu_id');
  	$lkk_id = $this->input->post('daftar_lkk');
  	$pagu = $this->input->post('pagu');

    $data = array(
      'lkk_id' => $lkk_id,
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

}
