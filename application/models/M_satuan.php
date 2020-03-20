<?php
class M_satuan extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function add_satuan($data)
  {
    $this->db->insert('tb_satuan', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function get_data(){
    $this->db->from('tb_satuan');    
    $this->db->order_by('satuan_id', 'DESC');
    return $this->db->get();
  }

  function get_edit($id){
    $this->db->from('tb_satuan');
    $this->db->where('satuan_id', $id);
    $query = $this->db->get();

    return $query->row();
  }

  function update_satuan($id, $data){
    $this->db->where('satuan_id', $id);
    $this->db->update('tb_satuan', $data);
    if ($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function delete($id){
    $this->db->where('satuan_id', $id);
    $this->db->delete('tb_satuan');
    $result = $this->db->affected_rows();
    if ($result == true){
      return true;
    }else{
      return false;
    }
  }

  function get_lkk(){
    $this->db->from('tb_lkk');
    return $this->db->get();
  }

}
