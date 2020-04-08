<?php
class M_realisasi extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function get_data(){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    return $this->db->get();
  }

  function get_data_adm($id){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where('tb_realisasi.admin_id', $id);

    return $this->db->get();
  }

  function get_by_year($year){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where('tb_pagu.tahun', $year);

    return $this->db->get();
  }

  function get_by_year_id($id, $year){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where('tb_realisasi.admin_id', $id);
    $this->db->where('tb_pagu.tahun', $year);

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

  function get_detail($id){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_realisasi.pagu_id', $id);
    return $this->db->get();
  }

  function edit_detail($id){
    $this->db->from('tb_realisasi');
    $this->db->where('realisasi_id', $id);
    $query = $this->db->get();

    return $query->row();
  }

  function update_detail($id, $data){
    $this->db->where('realisasi_id', $id);
    $this->db->update('tb_realisasi', $data);
    if ($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function delete($id){
    $this->db->where('realisasi_id', $id);
    $this->db->delete('tb_realisasi');
    $result = $this->db->affected_rows();
    if ($result == true){
      return true;
    }else{
      return false;
    }
  }

}
