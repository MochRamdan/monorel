<?php
class M_pagu extends CI_Model
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
    $this->db->order_by('lkk_id', 'DESC');
    return $this->db->get();
  }

  function get_edit($id){
    $this->db->from('tb_lkk');
    $this->db->where('lkk_id', $id);
    $query = $this->db->get();

    return $query->row();
  }

  function update_lkk($id, $data){
    $this->db->where('lkk_id', $id);
    $this->db->update('tb_lkk', $data);
    if ($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function delete($id){
    $this->db->where('lkk_id', $id);
    $this->db->delete('tb_lkk');
    $result = $this->db->affected_rows();
    if ($result == true){
      return true;
    }else{
      return false;
    }
  }

}
