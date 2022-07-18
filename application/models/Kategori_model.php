<?php
defined('BASEPATH') or exit('No direct script access allowed');

//extends class CI_Model
class kategori_model extends CI_Model
{
  public function getDataKategori($id_kategori)
  {
    //Menggunakan Query builder
    if ($id_kategori) {
      $this->db->from('kategori');
      $this->db->where('id_kategori', $id_kategori);
      $query = $this->db->get()->row_array();
      return $query;
    } else {
      $this->db->from('kategori');
      $query = $this->db->get()->result_array();
      return $query;
    }
  }

  //fungsi untuk menambahkan data
  public function insertKategori($data)
  {
    //Menggunakan Query builder
    $this->db->insert('kategori', $data);
    return $this->db->affected_rows();
    /// return $query;
  }
  //fungsi untuk mengubah data
  public function updateKategori($data, $id_kategori)
  {
    //mengunakan query Builder
    $this->db->update('kategori', $data, ['id_kategori' => $id_kategori]);
    return $this->db->affected_rows();
    //return $query;
  }
  //fungsi untuk menghapus data
  public function deleteKategori($id_kategori)
  {
    //menggunakan query builder
    $this->db->delete('kategori', ['id_kategori' => $id_kategori]);
    return $this->db->affected_rows();
    //return $query;
  }
}
