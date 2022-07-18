<?php
defined('BASEPATH') or exit('No direct script access allowed');

//extends class CI_Model
class pembeli_model extends CI_Model
{
  public function getDataPembeli($id_pembeli)
  {
    //Menggunakan Query builder
    if ($id_pembeli) {
      $this->db->from('pembeli');
      $this->db->where('id_pembeli', $id_pembeli);
      $query = $this->db->get()->row_array();
      return $query;
    } else {
      $this->db->from('pembeli');
      $query = $this->db->get()->result_array();
      return $query;
    }
  }

  //fungsi untuk menambahkan data
  public function insertPembeli($data)
  {
    //Menggunakan Query builder
    $this->db->insert('pembeli', $data);
    return $this->db->affected_rows();
    /// return $query;
  }
  //fungsi untuk mengubah data
  public function updatePembeli($data, $id_pembeli)
  {
    //mengunakan query Builder
    $this->db->update('pembeli', $data, ['id_pembeli' => $id_pembeli]);
    return $this->db->affected_rows();
    //return $query;
  }
  //fungsi untuk menghapus data
  public function deletePembeli($id_pembeli)
  {
    //menggunakan query builder
    $this->db->delete('pembeli', ['id_pembeli' => $id_pembeli]);
    return $this->db->affected_rows();
    //return $query;
  }
}
