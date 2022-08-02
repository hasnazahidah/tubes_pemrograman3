<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Buku";

        $data['data_buku'] = $this->Buku_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_buku)
    {
        $data['title'] = "Detail Data Buku";

        $data['data_buku'] = $this->Buku_model->getById($id_buku);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('buku/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Buku";

        $this->form_validation->set_rules('id_buku', 'id_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'trim|required');
        $this->form_validation->set_rules('stok', 'Stok', 'trim|required|numeric');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('mahasiswa/add', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_buku" =>$this->input->post('id_buku'),
                "judul" =>$this->input->post('judul'),
                "pengarang" =>$this->input->post('pengarang'),
                "penerbit" =>$this->input->post('penerbit'),
                "tahun_terbit" =>$this->input->post('tahun_terbit'),
                "stok" =>$this->input->post('stok'),
                "harga" =>$this->input->post('harga'),
                "tubes" =>"semangat"
            ];

            $insert = $this->Buku_model->save($data);
            
            if($insert['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('Buku');
            } elseif ($insert['response_code'] == 400){
                $this->session->set_flashdata('message', 'Data Duplikat!');
                redirect('Buku');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Buku');
            }
        }
    }

    public function edit($id_buku)
    {
        $data['title'] = "Edit Data Buku";
        $data['data_buku'] = $this->Buku_model->getById($id_buku);

        $this->form_validation->set_rules('id_buku', 'id_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'trim|required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'trim|required');
        $this->form_validation->set_rules('stok', 'Stok', 'trim|required|numeric');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('buku/edit', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_buku" =>$this->input->post('id_buku'),
                "judul" =>$this->input->post('judul'),
                "pengarang" =>$this->input->post('pengarang'),
                "penerbit" =>$this->input->post('penerbit'),
                "tahun_terbit" =>$this->input->post('tahun_terbit'),
                "stok" =>$this->input->post('stok'),
                "harga" =>$this->input->post('harga'),
                "tubes" =>"semangat"
            ];

            $update = $this->Buku_model->update($data);
            
            if($update['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('Buku');
            } elseif ($update['response_code'] == 400){
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Buku');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Buku');
            }
        }
    }

    public function delete($id_buku){
        $delete = $this->Buku_model->delete($id_buku);
            
            if($delete['response_code'] ==200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('Buku');
            } else {
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Buku');
            } 
    }
}