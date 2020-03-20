<?php
class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function auth_login($table, $data){
    $query = $this->db->get_where($table, $data)->result_array();
    
    return $query;
  }

}
