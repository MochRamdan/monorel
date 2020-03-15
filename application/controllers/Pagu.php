<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagu extends CI_Controller
{
	 public function __construct()
  {
    parent::__construct();
    // if($this->session->userdata('logged_in') != TRUE ){
    //   redirect("welcome");
    // }
    //load model here
    $this->load->model('M_pagu');
  }

  function index()
  {
  	$this->load->view('headerLte');
    $this->load->view('pagu/view_pagu');
  }
}
