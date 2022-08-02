<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Transaksi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Penjualan";
        $data['data_penjualan'] = $this->Penjualan_model->getAll();
        $data['data_buku'] = $this->Buku_model->getAll();
        $data['data_transaksi'] = $this->Transaksi_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('penjualan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_penjualan)
    {
        $data['title'] = "Detail Data Penjualan";
        $data['data_penjualan'] = $this->Penjualan_model->getById($id_penjualan);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('penjualan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Penjualan";
        $data['data_transaksi'] = $this->Transaksi_model->getAll();


        $this->form_validation->set_rules('id_penjualan', 'id_penjualan', 'trim|required|numeric');
        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required|numeric');
        $this->form_validation->set_rules('jumlah_terjual', 'jumlah_terjual', 'trim|required|numeric');
        $this->form_validation->set_rules('pemasukan', 'pemasukan', 'trim|required|numeric');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('penjualan/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_penjualan" => $this->input->post('id_penjualan'),
            "id_transaksi" => $this->input->post('id_transaksi'),
            "jumlah_terjual" => $this->input->post('jumlah_terjual'),
            "pemasukan" => $this->input->post('pemasukan'),
            "tanggal" => $this->input->post('tanggal'),
            "keytubes" => "hasna"
          ];
          $insert = $this->Penjualan_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('penjualan');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('penjualan');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('penjualan');
          }


        }
    }

    public function edit($id_penjualan)
    {
        $data['title'] = "Edit Data Penjualan";
        $data['data_penjualan'] = $this->Penjualan_model->getById($id_penjualan);


        $this->form_validation->set_rules('id_penjualan', 'id_penjualan', 'trim|required|numeric');
        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required|numeric');
        $this->form_validation->set_rules('jumlah_terjual', 'jumlah_terjual', 'trim|required|numeric');
        $this->form_validation->set_rules('pemasukan', 'pemasukan', 'trim|required|numeric');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('penjualan/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_penjualan" => $this->input->post('id_penjualan'),
            "id_transaksi" => $this->input->post('id_transaksi'),
            "jumlah_terjual" => $this->input->post('jumlah_terjual'),
            "pemasukan" => $this->input->post('pemasukan'),
            "tanggal" => $this->input->post('tanggal'),
            "keytubes" => "hasna"

          ];
          $update = $this->Penjualan_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('penjualan');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('penjualan');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('penjualan');
          }


        }
    }

    public function delete($id_penjualan)
    {

      $delete = $this->Penjualan_model->delete($id_penjualan);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dihapus');
        redirect('penjualan');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('penjualan');
      }

    }
}
