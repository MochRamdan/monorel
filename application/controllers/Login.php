<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    //load model here
    $this->load->model('M_login');
  }

	public function index()
	{
		$this->load->view('pages/login');
	}

	function auth(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('pages/login');
    }else {
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      $data = array(
      'username' => $username,
      'password' => $password
      );

      //get for cek admin
      $get_adm = $this->M_login->auth_login('tb_admin', $data);

      //condition multiple login
      if (!empty($get_adm)) {
      	$session_data = array(
          'id' => $get_adm[0]['admin_id'],
          'level' => $get_adm[0]['level'],
          'username' => $get_adm[0]['username']);

      	$this->session->set_userdata('logged_in', $session_data);
      	redirect('Dashboard');
      }else{
      	//jika username atau password salah
        $data = array(
        'error_message' => 'Invalid Username or Password'
        );
        $this->load->view('pages/login', $data);
      }
    }
	}

	function logout(){
		// Removing session data
    $sess_array = array(
    'username' => ''
    );
    $this->session->unset_userdata('logged_in', $sess_array);
    $data['message_display'] = 'Successfully Logout';
    $this->load->view('pages/login', $data);
	}

}
