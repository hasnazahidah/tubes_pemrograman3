<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->library('form_validation');
        $this->load->model('Pembeli_model');
        $this->load->model('Buku_model');
        $this->load->model('Pegawai_model');
        // $this->load->model('Kasir_model');
    }

    public function index()
    {
        $data['title'] = "List Data Transaksi";
        $data['data_transaksi'] = $this->Transaksi_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('Transaksi/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_transaksi)
    {
        $data['title'] = "Detail Data Transaksi";
        $data['data_transaksi'] = $this->Transaksi_model->getById($id_transaksi);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('Transaksi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Transaksi";
        $data['data_buku'] = $this->Buku_model->getAll();
        $data['data_pembeli'] = $this->Pembeli_model->getAll();
        $data['data_pegawai'] = $this->Pegawai_model->getAll();

        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required|numeric');
        $this->form_validation->set_rules('id_buku', 'id_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'trim|required|numeric');
        $this->form_validation->set_rules('id_pembeli', 'id_pembeli', 'trim|required|numeric');
        $this->form_validation->set_rules('jumlah_buku', 'jumlah_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('total', 'total', 'trim|required|numeric');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('Transaksi/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_transaksi" => $this->input->post('id_transaksi'),
            "id_buku" => $this->input->post('id_buku'),
            "id_pegawai" => $this->input->post('id_pegawai'),
            "id_pembeli" => $this->input->post('id_pembeli'),
            "jumlah_buku" => $this->input->post('jumlah_buku'),
            "total" => $this->input->post('total'),
            "tanggal" => $this->input->post('tanggal'),
            "keytubes" => "hasna"
          ];
          $insert = $this->Transaksi_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('transaksi');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('transaksi');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('transaksi');
          }


        }
    }

    public function edit($id_transaksi)
    {
        $data['title'] = "Edit Data Transaksi";
        $data['data_transaksi'] = $this->Transaksi_model->getById($id_transaksi);
        $data['data_buku'] = $this->Buku_model->getAll();
        $data['data_pegawai'] = $this->Pegawai_model->getAll();
        $data['data_pembeli'] = $this->Pembeli_model->getAll();


        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required|numeric');
        $this->form_validation->set_rules('id_buku', 'id_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'trim|required|numeric');
        $this->form_validation->set_rules('id_pembeli', 'id_pembeli', 'trim|required|numeric');
        $this->form_validation->set_rules('jumlah_buku', 'jumlah_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('total', 'total', 'trim|required|numeric');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('Transaksi/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_transaksi" => $this->input->post('id_transaksi'),
            "id_buku" => $this->input->post('id_buku'),
            "id_pegawai" => $this->input->post('id_pegawai'),
            "id_pembeli" => $this->input->post('id_pembeli'),
            "jumlah_buku" => $this->input->post('jumlah_buku'),
            "total" => $this->input->post('total'),
            "tanggal" => $this->input->post('tanggal'),
            "keytubes" => "hasna"
          ];
          $update = $this->Transaksi_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('transaksi');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('transaksi');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('transaksi');
          }


        }
    }

    public function delete($id_transaksi)
    {

      $delete = $this->Transaksi_model->delete($id_transaksi);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('transaksi');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('transaksi');
      }

    }
}
