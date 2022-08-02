<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Pembeli";
        $data['data_pembeli'] = $this->Pembeli_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pembeli/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_pembeli)
    {
        $data['title'] = "Detail Data Pembeli";
        $data['data_pembeli'] = $this->Pembeli_model->getById($id_pembeli);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pembeli/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Pembeli";


        $this->form_validation->set_rules('id_pembeli', 'id_pembeli', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('pembeli/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_pembeli" => $this->input->post('id_pembeli'),
            "nama_pembeli" => $this->input->post('nama_pembeli'),
            "no_telpon" => $this->input->post('no_telpon'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "keytubes" => "hasna"
          ];
          $insert = $this->Pembeli_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('pembeli');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('pembeli');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('pembeli');
          }


        }
    }

    public function edit($id_pembeli)
    {
        $data['title'] = "Edit Data Pembeli";
        $data['data_pembeli'] = $this->Pembeli_model->getById($id_pembeli);


        $this->form_validation->set_rules('id_pembeli', 'id_pembeli', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'trim|required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('pembeli/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_pembeli" => $this->input->post('id_pembeli'),
            "nama_pembeli" => $this->input->post('nama_pembeli'),
            "no_telpon" => $this->input->post('no_telpon'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "keytubes" => "hasna"

          ];
          $update = $this->Pembeli_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('pembeli');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('pembeli');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('pembeli');
          }


        }
    }

    public function delete($id_pembeli)
    {

      $delete = $this->Pembeli_model->delete($id_pembeli);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('pembeli');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('pembeli');
      }

    }
}
