<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Murid";

        $data['data_murid'] = $this->Kategori_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('murid/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_murid)
    {
        $data['title'] = "Detail Data Murid";

        $data['data_murid'] = $this->Kategori_model->getById($id_murid);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('murid/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Murid";

        $this->form_validation->set_rules('id_murid', 'ID Murid', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_murid', 'Nama Murid', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required|date');
        $this->form_validation->set_rules('nama_ortu', 'Nama Ortu', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('murid/add', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_murid" =>$this->input->post('id_murid'),
                "nama_murid" =>$this->input->post('nama_murid'),
                "tgl_lahir" =>$this->input->post('tgl_lahir'),
                "nama_ortu" =>$this->input->post('nama_ortu'),
                "KUNCIREST" =>"kunci123"
            ];

            $insert = $this->Kategori_model->save($data);
            
            if($insert['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('Murid');
            } elseif ($insert['response_code'] == 400){
                $this->session->set_flashdata('message', 'Data Duplikat!');
                redirect('Murid');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Murid');
            }
        }
    }

    public function edit($id_murid)
    {
        $data['title'] = "Edit Data Murid";
        $data['data_murid'] = $this->Kategori_model->getById($id_murid);

        $this->form_validation->set_rules('id_murid', 'ID Murid', 'trim|required|numeric');
        $this->form_validation->set_rules('nama_murid', 'Nama Murid', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required|date');
        $this->form_validation->set_rules('nama_ortu', 'Nama Ortu', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('murid/edit', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_murid" =>$this->input->post('id_murid'),
                "nama_murid" =>$this->input->post('nama_murid'),
                "tgl_lahir" =>$this->input->post('tgl_lahir'),
                "nama_ortu" =>$this->input->post('nama_ortu'),
                "KUNCIREST" =>"kunci123"
            ];

            $update = $this->Kategori_model->update($data);
            
            if($update['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('Murid');
            } elseif ($update['response_code'] == 400){
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Murid');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Murid');
            }
        }
    }

    public function delete($id_murid){
        $delete = $this->Kategori_model->delete($id_murid);
            
            if($delete['response_code'] ==200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('Murid');
            } else {
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Murid');
            } 
    }
}