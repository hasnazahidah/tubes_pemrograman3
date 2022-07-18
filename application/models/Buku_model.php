<?php
defined('BASEPATH') or exit('No direct script access allowed');

//extends class CI_Model
class buku_model extends CI_Model
{
  public function getDataBuku($id_buku)
  {
    //Menggunakan Query builder
    if ($id_buku) {
      $this->db->from('buku');
      $this->db->where('id_buku', $id_buku);
      $query = $this->db->get()->row_array();
      return $query;
    } else {
      $this->db->from('buku');
      $query = $this->db->get()->result_array();
      return $query;
    }
  }

  //fungsi untuk menambahkan data
  public function insertBuku($data)
  {
    //Menggunakan Query builder
    $this->db->insert('buku', $data);
    return $this->db->affected_rows();
    /// return $query;
  }
  //fungsi untuk mengubah data
  public function updateBuku($data, $id_buku)
  {
    //mengunakan query Builder
    $this->db->update('buku', $data, ['id_buku' => $id_buku]);
    return $this->db->affected_rows();
    //return $query;
  }
  //fungsi untuk menghapus data
  public function deleteBuku($id_buku)
  {
    //menggunakan query builder
    $this->db->delete('buku', ['id_buku' => $id_buku]);
    return $this->db->affected_rows();
    //return $query;
  }
}
