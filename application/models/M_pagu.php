<?php
class M_pagu extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function get_data(){
    $this->db->from('tb_pagu');    
    $this->db->order_by('pagu_id', 'DESC');
    return $this->db->get();
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

}
