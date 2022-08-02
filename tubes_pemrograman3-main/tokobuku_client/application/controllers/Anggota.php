<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List data Anggota";
        $data['data_anggota'] = $this->Anggota_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('Anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_anggota)
    {
        $data['title'] = "Detail data Anggota";
        $data['data_anggota'] = $this->Anggota_model->getById($id_anggota);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('Anggota/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah data Anggota";


        $this->form_validation->set_rules('id_anggota', 'id_anggota', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'trim|required');
        $this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('Anggota/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_anggota" => $this->input->post('id_anggota'),
            "nama_anggota" => $this->input->post('nama_anggota'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "kelas" => $this->input->post('kelas'),
            "no_telpon" => $this->input->post('no_telpon'),
            "alamat" => $this->input->post('alamat'),
            "akcantik" => "hybestie"
          ];
          $insert = $this->Anggota_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('Anggota');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('Anggota');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('Anggota');
          }


        }
    }

    public function edit($id_anggota)
    {
        $data['title'] = "Edit data Anggota";
        $data['data_anggota'] = $this->Anggota_model->getById($id_anggota);

        $this->form_validation->set_rules('id_anggota', 'id_anggota', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'trim|required');
        $this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('Anggota/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_anggota" => $this->input->post('id_anggota'),
            "nama_anggota" => $this->input->post('nama_anggota'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "kelas" => $this->input->post('kelas'),
            "no_telpon" => $this->input->post('no_telpon'),
            "alamat" => $this->input->post('alamat'),
            "akcantik" => "hybestie"
          ];
          $update = $this->Anggota_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('Anggota');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('Anggota');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('Anggota');
          }


        }
    }

    public function delete($id_anggota)
    {

      $delete = $this->Anggota_model->delete($id_anggota);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('Anggota');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('Anggota');
      }

    }
}
