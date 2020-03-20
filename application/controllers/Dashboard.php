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
    // $this->load->model('M_lkk');
  }

  public function index()
  {
    if ($this->session->userdata['logged_in']['level'] == '1') 
    {
      $this->load->view('headerLte');
    }
    else
    {
      $this->load->view('headerTwo');
    }

    $this->load->view('dashboard/dashboard');
    $this->load->view('footerLte');
  }
}
