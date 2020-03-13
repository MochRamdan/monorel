<?php
class M_lkk extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function add_lkk($data)
  {
    $this->db->insert('tb_lkk', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function get_data(){
    $this->db->from('tb_lkk');
    return $this->db->get();
  }

}
