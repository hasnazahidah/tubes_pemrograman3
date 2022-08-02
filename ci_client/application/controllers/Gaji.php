<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gaji_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Gaji";

        $data['data_gaji'] = $this->Gaji_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('gaji/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_gaji)
    {
        $data['title'] = "Detail Data Gaji";

        $data['data_gaji'] = $this->Gaji_model->getById($id_gaji);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('gaji/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Gaji";

        $this->form_validation->set_rules('id_gaji', 'ID Gaji', 'trim|required|numeric');
        $this->form_validation->set_rules('id_guru2', 'ID Guru', 'trim|required');
        $this->form_validation->set_rules('jmlh_gaji', 'Jumlah Gaji', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('gaji/add', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_gaji" =>$this->input->post('id_gaji'),
                "id_guru2" =>$this->input->post('id_guru2'),
                "jmlh_gaji" =>$this->input->post('jmlh_gaji'),
                "KUNCIREST" =>"kunci123"
            ];

            $insert = $this->Gaji_model->save($data);
            
            if($insert['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('Gaji');
            } elseif ($insert['response_code'] == 400){
                $this->session->set_flashdata('message', 'Data Duplikat!');
                redirect('Gaji');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Gaji');
            }
        }
    }

    public function edit($id_gaji)
    {
        $data['title'] = "Edit Data Gaji";
        $data['data_gaji'] = $this->Gaji_model->getById($id_gaji);

        $this->form_validation->set_rules('id_gaji', 'ID Gaji', 'trim|required|numeric');
        $this->form_validation->set_rules('id_guru2', 'ID Guru', 'trim|required');
        // $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('jmlh_gaji', 'Jumlah Gaji', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('gaji/edit', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_gaji" =>$this->input->post('id_gaji'),
                "id_guru2" =>$this->input->post('id_guru2'),
                // "nama_guru" =>$this->input->post('nama_guru'),
                "jmlh_gaji" =>$this->input->post('jmlh_gaji'),
                "KUNCIREST" =>"kunci123"
            ];

            $update = $this->Gaji_model->update($data);
            
            if($update['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('Gaji');
            } elseif ($update['response_code'] == 400){
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Gaji');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Gaji');
            }
        }
    }

    public function delete($id_gaji){
        $delete = $this->Gaji_model->delete($id_gaji);
            
            if($delete['response_code'] ==200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('Gaji');
            } else {
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Gaji');
            } 
    }
}