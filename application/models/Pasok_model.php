<?php
defined('BASEPATH') or exit('No direct script access allowed');

//extends class CI_Model
class pasok_model extends CI_Model
{
  public function getDataPasok($id_pasok)
  {
    //Menggunakan Query builder
    if ($id_pasok) {
      $this->db->from('pasok');
      $this->db->where('id_pasok', $id_pasok);
      $query = $this->db->get()->row_array();
      return $query;
    } else {
      $this->db->from('pasok');
      $query = $this->db->get()->result_array();
      return $query;
    }
  }

  //fungsi untuk menambahkan data
  public function insertPasok($data)
  {
    //Menggunakan Query builder
    $this->db->insert('pasok', $data);
    return $this->db->affected_rows();
    /// return $query;
  }
  //fungsi untuk mengubah data
  public function updatePasok($data, $id_pasok)
  {
    //mengunakan query Builder
    $this->db->update('pasok', $data, ['id_pasok' => $id_pasok]);
    return $this->db->affected_rows();
    //return $query;
  }
  //fungsi untuk menghapus data
  public function deletePasok($id_pasok)
  {
    //menggunakan query builder
    $this->db->delete('pasok', ['id_pasok' => $id_pasok]);
    return $this->db->affected_rows();
    //return $query;
  }
}
