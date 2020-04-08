<?php
class M_user extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  function get_data(){
    $this->db->from('tb_admin');
    // $this->db->order_by('admin_id', 'DESC');
    return $this->db->get();
  }

  function add_user($data)
  {
    $this->db->insert('tb_admin', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function get_edit($id){
    $this->db->from('tb_admin');
    $this->db->where('admin_id', $id);
    $query = $this->db->get();

    return $query->row();
  }

  function update_user($id, $data){
    $this->db->where('admin_id', $id);
    $this->db->update('tb_admin', $data);
    if ($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function delete($id){
    $this->db->where('admin_id', $id);
    $this->db->delete('tb_admin');
    $result = $this->db->affected_rows();
    if ($result == true){
      return true;
    }else{
      return false;
    }
  }

}
