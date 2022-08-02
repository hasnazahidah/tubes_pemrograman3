<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Kategori";
        $data['data_kategori'] = $this->Kategori_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_kategori)
    {
        $data['title'] = "Detail Data Kategori";
        $data['data_kategori'] = $this->Kategori_model->getById($id_kategori);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('kategori/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Kategori";
        $data['data_buku'] = $this->Buku_model->getAll();


        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|numeric');
        $this->form_validation->set_rules('id_buku2', 'id_buku2', 'trim|required|numeric');
        $this->form_validation->set_rules('jenis_kategori', 'jenis_kategori', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('kategori/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_kategori" => $this->input->post('id_kategori'),
            "id_buku2" => $this->input->post('id_buku2'),
            "jenis_kategori" => $this->input->post('jenis_kategori'),
            "deskripsi" => $this->input->post('deskripsi'),
            "tanggal" => $this->input->post('tanggal'),
            "keytubes" => "dhanti"
          ];
          $insert = $this->Kategori_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('kategori');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('kategori');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('kategori');
          }


        }
    }

    public function edit($id_kategori)
    {
        $data['title'] = "Edit Data Kategori";
        $data['data_kategori'] = $this->Kategori_model->getById($id_kategori);
        $data['data_buku'] = $this->Buku_model->getAll();


        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|numeric');
        $this->form_validation->set_rules('id_buku2', 'id_buku2', 'trim|required|numeric');
        $this->form_validation->set_rules('jenis_kategori', 'jenis_kategori', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('kategori/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_kategori" => $this->input->post('id_kategori'),
            "id_buku2" => $this->input->post('id_buku2'),
            "jenis_kategori" => $this->input->post('jenis_kategori'),
            "deskripsi" => $this->input->post('deskripsi'),
            "tanggal" => $this->input->post('tanggal'),
            "keytubes" => "dhanti"
          ];
          $update = $this->Kategori_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('kategori');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('kategori');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('kategori');
          }


        }
    }

    public function delete($id_kategori)
    {

      $delete = $this->Kategori_model->delete($id_kategori);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('kategori');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('kategori');
      }

    }
}
