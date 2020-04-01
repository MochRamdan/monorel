<?php
class M_pagu extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function get_data($multipleWhere){
    $this->db->from('tb_pagu');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where($multipleWhere);
    // $this->db->order_by('pagu_id', 'DESC');
    return $this->db->get();
  }

  function get_data_pagu($id){
    $this->db->from('tb_pagu');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    $this->db->where('tb_pagu.admin_id', $id);
    // $this->db->order_by('pagu_id', 'DESC');
    return $this->db->get();
  }

  function get_pagu_adm(){
    $this->db->from('tb_pagu');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    return $this->db->get();
  }

  function get_data_adm(){
    $this->db->from('tb_pagu');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    return $this->db->get();
  }

  function add_pagu($data)
  {
    $this->db->insert('tb_pagu', $data);
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

  function get_detail($arr){
    $this->db->from('tb_pagu');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where($arr);
    return $this->db->get();
  }

  function get_year(){
    $this->db->select('tahun');
    $this->db->from('tb_pagu');
    return $this->db->get();
  }

}
