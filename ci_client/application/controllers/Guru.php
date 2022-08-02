<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Guru";

        $data['data_guru'] = $this->Guru_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_guru)
    {
        $data['title'] = "Detail Data Guru";

        $data['data_guru'] = $this->Guru_model->getById($id_guru);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('guru/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Guru";

        $this->form_validation->set_rules('id_guru', 'ID Guru', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('guru/add', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_guru" =>$this->input->post('id_guru'),
                "nama_guru" =>$this->input->post('nama_guru'),
                "pendidikan" =>$this->input->post('pendidikan'),
                "status" =>$this->input->post('status'),
                "KUNCIREST" =>"kunci123"
            ];

            $insert = $this->Guru_model->save($data);
            
            if($insert['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('Guru');
            } elseif ($insert['response_code'] == 400){
                $this->session->set_flashdata('message', 'Data Duplikat!');
                redirect('Guru');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Guru');
            }
        }
    }

    public function edit($id_guru)
    {
        $data['title'] = "Edit Data Guru";
        $data['data_guru'] = $this->Guru_model->getById($id_guru);

        $this->form_validation->set_rules('id_guru', 'ID Guru', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('guru/edit', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_guru" =>$this->input->post('id_guru'),
                "nama_guru" =>$this->input->post('nama_guru'),
                "pendidikan" =>$this->input->post('pendidikan'),
                "status" =>$this->input->post('status'),
                "KUNCIREST" =>"kunci123"
            ];

            $update = $this->Guru_model->update($data);
            
            if($update['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('Guru');
            } elseif ($update['response_code'] == 400){
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Guru');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Guru');
            }
        }
    }

    public function delete($id_guru){
        $delete = $this->Guru_model->delete($id_guru);
            
            if($delete['response_code'] ==200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('Guru');
            } else {
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Guru');
            } 
    }
}