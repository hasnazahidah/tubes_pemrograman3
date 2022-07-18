<?php
defined('BASEPATH') or exit('No direct script access allowed');

//extends class CI_Model
class distributor_model extends CI_Model
{
  public function getDataDistributor($id_dist)
  {
    //Menggunakan Query builder
    if ($id_dist) {
      $this->db->from('distributor');
      $this->db->where('id_dist', $id_dist);
      $query = $this->db->get()->row_array();
      return $query;
    } else {
      $this->db->from('distributor');
      $query = $this->db->get()->result_array();
      return $query;
    }
  }

  //fungsi untuk menambahkan data
  public function insertDistributor($data)
  {
    //Menggunakan Query builder
    $this->db->insert('distributor', $data);
    return $this->db->affected_rows();
    /// return $query;
  }
  //fungsi untuk mengubah data
  public function updateDistributor($data, $id_dist)
  {
    //mengunakan query Builder
    $this->db->update('distributor', $data, ['id_dist' => $id_dist]);
    return $this->db->affected_rows();
    //return $query;
  }
  //fungsi untuk menghapus data
  public function deleteDistributor($id_dist)
  {
    //menggunakan query builder
    $this->db->delete('distributor', ['id_dist' => $id_dist]);
    return $this->db->affected_rows();
    //return $query;
  }
}
