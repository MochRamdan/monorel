<?php
class M_kategori extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function get_data(){
    $this->db->from('tb_kategori');
    $this->db->order_by('kategori_id', 'DESC');
    return $this->db->get();
  }

  function add_kategori($data)
  {
    $this->db->insert('tb_kategori', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function get_edit($id){
    $this->db->from('tb_kategori');
    $this->db->where('kategori_id', $id);
    $query = $this->db->get();

    return $query->row();
  }

  function update_kategori($id, $data){
    $this->db->where('kategori_id', $id);
    $this->db->update('tb_kategori', $data);
    if ($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function delete($id){
    $this->db->where('kategori_id', $id);
    $this->db->delete('tb_kategori');
    $result = $this->db->affected_rows();
    if ($result == true){
      return true;
    }else{
      return false;
    }
  }

}
