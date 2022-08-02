<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');

        // if(!$this->Buku_model->__construct('Client'))
        // {
        //   $this->load->view('buku/gagal');
        // }

        // $this->_guzzle = new Client([
        //     'base_uri' => 'http://localhost/tubes_pemrograman3-main/tokobuku/API/Buku/bk',
        //     'auth'  => ['admin', '1234']
        // ]);       
    }

    public function index()
    {
        $data['title'] = "List Data Buku";
        $data['data_buku'] = $this->Buku_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');


        // $data['data_buku'] = $this->Buku_model->getAll();       
        // $var = var_dump($data);       
  
        // if($data['error'] = 'Unauthorized')
        // {
         
        //   $this->load->view('templates/header', $data);
        //   $this->load->view('templates/menu');
        //   $this->load->view('buku/gagal', $data);
        //   $this->load->view('templates/footer');
        // }
        // else 
      
        // {
        //   $data['data_buku'] = $this->Buku_model->getAll();
        //   $this->load->view('templates/header', $data);
        //   $this->load->view('templates/menu');
        //   $this->load->view('buku/index', $data);
        //   $this->load->view('templates/footer');
          
        // }       
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
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('pengarang', 'pengarang', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
        $this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'trim|required|numeric');
        $this->form_validation->set_rules('stok', 'stok', 'trim|required|numeric');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');

        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('buku/add', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_buku" => $this->input->post('id_buku'),
            "judul" => $this->input->post('judul'),
            "pengarang" => $this->input->post('pengarang'),
            "penerbit" => $this->input->post('penerbit'),
            "tahun_terbit" => $this->input->post('tahun_terbit'),
            "stok" => $this->input->post('stok'),
            "harga" => $this->input->post('harga'),
            "keytubes" => "dhanti"
          ];
          $insert = $this->Buku_model->save($data);
          if($insert['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data ditambahkan');
            redirect('buku');
          }elseif ($insert['response_code'] == 400) {
            $this->session->set_flashdata('message', 'data duplikat');
            redirect('buku');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('buku');
          }


        }
    }

    public function edit($id_buku)
    {
        $data['title'] = "Edit Data Buku";
        $data['data_buku'] = $this->Buku_model->getById($id_buku);


        $this->form_validation->set_rules('id_buku', 'id_buku', 'trim|required|numeric');
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('pengarang', 'pengarang', 'trim|required');
        $this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
        $this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'trim|required|numeric');
        $this->form_validation->set_rules('stok', 'stok', 'trim|required|numeric');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');


        if ($this->form_validation->run() == false){
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu');
          $this->load->view('buku/edit', $data);
          $this->load->view('templates/footer');

        } else {
          $data = [
            "id_buku" => $this->input->post('id_buku'),
            "judul" => $this->input->post('judul'),
            "pengarang" => $this->input->post('pengarang'),
            "penerbit" => $this->input->post('penerbit'),
            "tahun_terbit" => $this->input->post('tahun_terbit'),
            "stok" => $this->input->post('stok'),
            "harga" => $this->input->post('harga'),
            "keytubes" => "dhanti"
          ];
          $update = $this->Buku_model->update($data);
          if($update['response_code'] == 201) {
            $this->session->set_flashdata('flash', 'data berhasil diubah');
            redirect('buku');
          }elseif ($update['response_code'] == 400) {
            $this->session->set_flashdata('message', 'gagal !');
            redirect('buku');

          }else {

              $this->session->set_flashdata('message', 'gagal!');
              redirect('buku');
          }


        }
    }

    public function delete($id_buku)
    {

      $delete = $this->Buku_model->delete($id_buku);
      if($delete['response_code'] == 200) {
        $this->session->set_flashdata('flash', 'data berhasil dihapus');
        redirect('buku');

      }else {

          $this->session->set_flashdata('message', 'gagal!');
          redirect('buku');
      }

    }
}
