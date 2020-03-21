<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') != TRUE ){
      redirect("Login");
    }
    //load model here
    $this->load->model('M_user');
  }

  function index()
  {
    $this->load->view('headerLte');
    $this->load->view('user/view_user');
  }

  function save(){
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    if ($this->session->userdata['logged_in']['level'] == '1') {
      $level = '2';
    }

    $data = array(
      'username' => $username,
      'password' => $password,
      'level' => $level
    );

    $result = $this->M_user->add_user($data);

    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function data(){
    $data = $this->M_user->get_data()->result();
    echo json_encode($data);
  }

  function get_edit($id){
    $data = $this->M_user->get_edit($id);
    echo json_encode($data);
  }

  function update_user(){
    $id = $this->input->post('admin_id');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    if ($this->session->userdata['logged_in']['level'] == '1') 
    {
      $level = '2';
    }

    $data = array(
      'username' => $username,
      'password' => $password,
      'level' => $level
    );

    $result = $this->M_user->update_user($id, $data);
    $msg['success'] = $result;
    echo json_encode($msg);
  }

  function delete($id){
    $data = $this->M_user->delete($id);

    echo json_encode($data);
  }

}
