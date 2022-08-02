<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penggajian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Akumulasi Penggajian";

        $data['data_penggajian'] = $this->Penggajian_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('penggajian/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_penggajian)
    {
        $data['title'] = "Detail Data Akumulasi Penggajian";

        $data['data_penggajian'] = $this->Penggajian_model->getById($id_penggajian);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('penggajian/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Akumulasi Penggajian";

        $this->form_validation->set_rules('id_penggajian', 'ID Penggajian', 'trim|required|numeric');
        $this->form_validation->set_rules('id_gaji2', 'ID Gaji', 'trim|required|numeric');
        $this->form_validation->set_rules('id_pemasukan2', 'ID Pemasukan SPP', 'trim|required|numeric');
        $this->form_validation->set_rules('akumulasi_gaji', 'Akumulasi Gaji', 'trim|required|numeric');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('penggajian/add', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_penggajian" =>$this->input->post('id_penggajian'),
                "id_gaji2" =>$this->input->post('id_gaji2'),
                "id_pemasukan2" =>$this->input->post('id_pemasukan2'),
                "akumulasi_gaji" =>$this->input->post('akumulasi_gaji'),
                "KUNCIREST" =>"kunci123"
            ];

            $insert = $this->Penggajian_model->save($data);
            
            if($insert['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('Penggajian');
            } elseif ($insert['response_code'] == 400){
                $this->session->set_flashdata('message', 'Data Duplikat!');
                redirect('Penggajian');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Penggajian');
            }
        }
    }

    public function edit($id_penggajian)
    {
        $data['title'] = "Edit Data Akumulasi Penggajian";
        $data['data_penggajian'] = $this->Penggajian_model->getById($id_penggajian);

        $this->form_validation->set_rules('id_penggajian', 'ID Penggajian', 'trim|required|numeric');
        $this->form_validation->set_rules('id_gaji2', 'ID Gaji', 'trim|required|numeric');
        $this->form_validation->set_rules('id_pemasukan2', 'ID Pemasukan SPP', 'trim|required|numeric');
        $this->form_validation->set_rules('akumulasi_gaji', 'Akumulasi Gaji', 'trim|required|numeric');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('penggajian/edit', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_penggajian" =>$this->input->post('id_penggajian'),
                "id_gaji2" =>$this->input->post('id_gaji2'),
                "id_pemasukan2" =>$this->input->post('id_pemasukan2'),
                "akumulasi_gaji" =>$this->input->post('akumulasi_gaji'),
                "KUNCIREST" =>"kunci123"
            ];

            $update = $this->Penggajian_model->update($data);
            
            if($update['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('Penggajian');
            } elseif ($update['response_code'] == 400){
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Penggajian');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Penggajian');
            }
        }
    }

    public function delete($id_penggajian){
        $delete = $this->Penggajian_model->delete($id_penggajian);
            
            if($delete['response_code'] ==200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('Penggajian');
            } else {
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Penggajian');
            } 
    }
}