<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kasir_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List data kasir";
        $data['data_kasir'] = $this->Kasir_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('kasir/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_kasir)
    {
        $data['title'] = "Detail data kasir";
        $data['data_kasir'] = $this->Kasir_model->getById($id_kasir);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('kasir/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah data kasir";


        $this->form_validation->set_rules('id_kasir', 'id_kasir', 'trim|required|numeric');
        $this->form_validation->set_rules('id_users', 'id_users', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_kasir', 'nama_kasir', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('kasir/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_kasir" => $this->input->post('id_kasir'),
            "id_users" => $this->input->post('id_users'),
            "nama_kasir" => $this->input->post('nama_kasir'),
            "no_telpon" => $this->input->post('no_telpon'),
            "alamat" => $this->input->post('alamat'),
            "akcantik" => "hybestie"
          ];
          $insert = $this->Kasir_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('kasir');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('kasir');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('kasir');
          }


        }
    }

    public function edit($id_kasir)
    {
        $data['title'] = "Edit data kasir";
        $data['data_kasir'] = $this->Kasir_model->getById($id_kasir);


        $this->form_validation->set_rules('id_kasir', 'id_kasir', 'trim|required|numeric');
        $this->form_validation->set_rules('id_users', 'id_users', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_kasir', 'nama_kasir', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('kasir/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_kasir" => $this->input->post('id_kasir'),
            "id_users" => $this->input->post('id_users'),
            "nama_kasir" => $this->input->post('nama_kasir'),
            "no_telpon" => $this->input->post('no_telpon'),
            "alamat" => $this->input->post('alamat'),
            "akcantik" => "hybestie"

          ];
          $update = $this->Kasir_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('kasir');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('kasir');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('kasir');
          }


        }
    }

    public function delete($id_kasir)
    {

      $delete = $this->Kasir_model->delete($id_kasir);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('kasir');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('kasir');
      }

    }
}
