<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
    }

	public function index()
    {
        //load view form register
        $this->load->view('registrasi/add');
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
          // $this->load->view('templates/menu');
          $this->load->view('registrasi/add', $data);
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
            redirect('login');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('login');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('login');
          }


        }
    }

}
