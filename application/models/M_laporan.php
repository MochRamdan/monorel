<?php
class M_laporan extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function get_data_year($id, $tahun){
    $this->db->from('tb_pagu');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    $this->db->where('tb_pagu.admin_id', $id);
    $this->db->where('tb_pagu.tahun', $tahun);

    return $this->db->get();
  }

}
