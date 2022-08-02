<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Pegawai";
        $data['data_pegawai'] = $this->Pegawai_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_pegawai)
    {
        $data['title'] = "Detail Data Pegawai";
        $data['data_pegawai'] = $this->Pegawai_model->getById($id_pegawai);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pegawai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Pegawai";
        $data['data_users'] = $this->Users_model->getAll();
        // $data['data_users'] = $this->Users_model->getById($id_users);


        $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'trim|required|numeric');
        $this->form_validation->set_rules('id_users2', 'id_users2', 'trim|required|numeric');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('pegawai/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_pegawai" => $this->input->post('id_pegawai'),
            "id_users2" => $this->input->post('id_users2'),
            "nama" => $this->input->post('nama'),
            "no_telpon" => $this->input->post('no_telpon'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "keytubes" => "dhanti"
          ];
          $insert = $this->Pegawai_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('pegawai');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('pegawai');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('pegawai');
          }


        }
    }

    public function edit($id_pegawai)
    {
        $data['title'] = "Edit Data Pegawai";
        $data['data_pegawai'] = $this->Pegawai_model->getById($id_pegawai);


        $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'trim|required|numeric');
        $this->form_validation->set_rules('id_users2', 'id_users2', 'trim|required|numeric');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('pegawai/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_pegawai" => $this->input->post('id_pegawai'),
            "id_users2" => $this->input->post('id_users2'),
            "nama" => $this->input->post('nama'),
            "no_telpon" => $this->input->post('no_telpon'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "keytubes" => "dhanti"

          ];
          $update = $this->Pegawai_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('pegawai');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('pegawai');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('pegawai');
          }


        }
    }

    public function delete($id_pegawai)
    {

      $delete = $this->Pegawai_model->delete($id_pegawai);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('pegawai');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('pegawai');
      }

    }
}
