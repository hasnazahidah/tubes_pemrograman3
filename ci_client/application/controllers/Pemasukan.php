<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemasukan_model');
        $this->load->model('Murid_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "List Data Pemasukan SPP";

        $data['data_pemasukan'] = $this->Pemasukan_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pemasukan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_pemasukan)
    {
        $data['title'] = "Detail Data Pemasukan SPP";

        $data['data_pemasukan'] = $this->Pemasukan_model->getById($id_pemasukan);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('pemasukan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = "Tambah Data Pemasukan SPP";

        $data['data_murid'] = $this->Murid_model->getAll();

        $this->form_validation->set_rules('id_pemasukan', 'ID Pemasukan', 'trim|required|numeric');
        $this->form_validation->set_rules('id_murid2', 'ID Murid', 'trim|required');
        $this->form_validation->set_rules('jmlh_setoran', 'Jumlah Setoran', 'trim|required|numeric');
        $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('pemasukan/add', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_pemasukan" =>$this->input->post('id_pemasukan'),
                "id_murid2" =>$this->input->post('id_murid2'),
                "jmlh_setoran" =>$this->input->post('jmlh_setoran'),
                "tgl_transaksi" =>$this->input->post('tgl_transaksi'),
                "KUNCIREST" =>"kunci123"
            ];

            // var_dump($data); die;
            $insert = $this->Pemasukan_model->save($data);
            
            
            if($insert['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Ditambahkan');
                redirect('Pemasukan');
            } elseif ($insert['response_code'] == 400){
                $this->session->set_flashdata('message', 'Data Duplikat!');
                redirect('Pemasukan');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Pemasukan');
            }
        }
    }

    public function edit($id_pemasukan)
    {
        $data['title'] = "Edit Data Pemasukan SPP";
        $data['data_pemasukan'] = $this->Pemasukan_model->getById($id_pemasukan);

        $this->form_validation->set_rules('id_pemasukan', 'ID Pemasukan', 'trim|required|numeric');
        $this->form_validation->set_rules('id_murid2', 'ID Murid', 'trim|required');
        $this->form_validation->set_rules('jmlh_setoran', 'Jumlah Setoran', 'trim|required|numeric');
        $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'trim|required');

        if($this->form_validation->run()==false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/menu');
            $this->load->view('pemasukan/edit', $data);
            $this->load->view('templates/footer');

        }else{
            $data = [
                "id_pemasukan" =>$this->input->post('id_pemasukan'),
                "id_murid2" =>$this->input->post('id_murid2'),
                "jmlh_setoran" =>$this->input->post('jmlh_setoran'),
                "tgl_transaksi" =>$this->input->post('tgl_transaksi'),
                "KUNCIREST" =>"kunci123"
            ];

            $update = $this->Pemasukan_model->update($data);
            
            if($update['response_code'] ==201){
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('Pemasukan');
            } elseif ($update['response_code'] == 400){
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Pemasukan');
            } else{
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Pemasukan');
            }
        }
    }

    public function delete($id_pemasukan){
        $delete = $this->Pemasukan_model->delete($id_pemasukan);
            
            if($delete['response_code'] ==200){
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
                redirect('Pemasukan');
            } else {
                $this->session->set_flashdata('message', 'GAGAL!');
                redirect('Pemasukan');
            } 
    }
}