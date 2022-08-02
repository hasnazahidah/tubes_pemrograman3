<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Users";
        $data['data_users'] = $this->Users_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_users)
    {
        $data['title'] = "Detail Data Users";
        $data['data_users'] = $this->Users_model->getById($id_users);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('users/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Users";


        $this->form_validation->set_rules('id_users', 'id_users', 'trim|required|numeric');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('level', 'level', 'trim|required|numeric');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('users/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_users" => $this->input->post('id_users'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "status" => $this->input->post('status'),
            "level" => $this->input->post('level'),
            "keytubes" => "hasna"
          ];
          $insert = $this->Users_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('users');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('users');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('users');
          }


        }
    }

    public function edit($id_users)
    {
        $data['title'] = "Edit Data Users";
        $data['data_users'] = $this->Users_model->getById($id_users);


        $this->form_validation->set_rules('id_users', 'id_users', 'trim|required|numeric');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('level', 'level', 'trim|required|numeric');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('users/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_users" => $this->input->post('id_users'),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "status" => $this->input->post('status'),
            "level" => $this->input->post('level'),
            "keytubes" => "hasna"

          ];
          $update = $this->Users_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('users');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('users');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('users');
          }


        }
    }

    public function delete($id_users)
    {

      $delete = $this->Users_model->delete($id_users);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dhapus');
        redirect('users');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('users');
      }

    }
}
