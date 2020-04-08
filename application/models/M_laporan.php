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

  function get_by_all_kategori($id, $tahun){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_realisasi.kategori_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_realisasi.admin_id', $id);
    $this->db->where('tb_pagu.tahun', $tahun);

    return $this->db->get();
  }

  function get_by_kategori($id, $tahun, $kategori){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_realisasi.kategori_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_realisasi.admin_id', $id);
    $this->db->where('tb_pagu.tahun', $tahun);
    $this->db->where('tb_kategori.nama_kategori', $kategori);

    return $this->db->get();
  }

  function adm_all_pagu($tahun){
    $this->db->from('tb_pagu');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where('tb_pagu.tahun', $tahun);

    return $this->db->get();
  }

  function adm_by_user($tahun, $user){
    $this->db->from('tb_pagu');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_pagu.admin_id');
    $this->db->join('tb_lkk', 'tb_lkk.lkk_id = tb_pagu.lkk_id');
    $this->db->where('tb_pagu.tahun', $tahun);
    $this->db->where('tb_pagu.admin_id', $user);

    return $this->db->get();
  }

  function by_year($tahun){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_realisasi.admin_id');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_realisasi.kategori_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_pagu.tahun', $tahun);

    return $this->db->get();
  }

  function by_year_kategori($tahun, $kategori){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_realisasi.admin_id');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_realisasi.kategori_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_pagu.tahun', $tahun);
    $this->db->where('tb_kategori.nama_kategori', $kategori);

    return $this->db->get();
  }

  function by_year_user($tahun, $user){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_realisasi.admin_id');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_realisasi.kategori_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_pagu.tahun', $tahun);
    $this->db->where('tb_realisasi.admin_id', $user);

    return $this->db->get();
  }

  function by_year_user_kategori($tahun, $user, $kategori){
    $this->db->from('tb_realisasi');
    $this->db->join('tb_admin', 'tb_admin.admin_id = tb_realisasi.admin_id');
    $this->db->join('tb_pagu', 'tb_pagu.pagu_id = tb_realisasi.pagu_id');
    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_realisasi.kategori_id');
    $this->db->join('tb_satuan', 'tb_satuan.satuan_id = tb_realisasi.satuan_id');
    $this->db->where('tb_pagu.tahun', $tahun);
    $this->db->where('tb_realisasi.admin_id', $user);
    $this->db->where('tb_kategori.nama_kategori', $kategori);

    return $this->db->get();
  }

}
