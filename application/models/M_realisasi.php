<?php
class M_realisasi extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function get_data(){
    $this->db->from('tb_realisasi');
    return $this->db->get();
  }

  function add_realisasi($data)
  {
    $this->db->insert('tb_realisasi', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function get_edit($id){
    $this->db->from('tb_pagu');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where('tb_pagu.pagu_id', $id);
    $query = $this->db->get();

    return $query->row();
  }

  function update_pagu($id, $data){
    $this->db->where('pagu_id', $id);
    $this->db->update('tb_pagu', $data);
    if ($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function delete($id){
    $this->db->where('pagu_id', $id);
    $this->db->delete('tb_pagu');
    $result = $this->db->affected_rows();
    if ($result == true){
      return true;
    }else{
      return false;
    }
  }

}
