<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Buku extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->methods['bk_get']['limit'] = 1000;
        $this->methods['bk_post']['limit'] = 1000;
    }

    public function bk_get()
    {
        $id_buku = $this->get('id_buku');
        $data = $this->Buku_model->getDataBuku($id_buku);

        if($data)
        {
           $this->response(
            [
                'data' => $data,
                'status' => 'success',
                'response_code' => RestController::HTTP_OK
            ],
            RestController::HTTP_OK
        );
        } else {
            $this->response(
            [
                'status' => 'gagal',
                'response_code' => RestController::HTTP_NOT_FOUND
            ],
            RestController::HTTP_NOT_FOUND
        );
        }
    }

function bk_post()
{
    $data = array(
        'id_buku' => $this->post('id_buku'),
        'judul' => $this->post('judul'),
        'pengarang' => $this->post('pengarang'),
        'penerbit' => $this->post('penerbit'),
        'tahun_terbit' => $this->post('tahun_terbit'),
        'stok' => $this->post('stok'),
        'harga' => $this->post('harga')
    );

    $cek_id_buku = $this->Buku_model->getDataBuku($this->post('id_buku'));

    //Jika semua data wajib diisi
    if ($data['id_buku'] == NULL || $data['judul_buku'] == NULL || $data['pengarang'] == NULL || $data['penerbit'] == NULL || $data['tahun_terbit'] == NULL || $data['stok'] == NULL || $data['harga'] == NULL) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

    }elseif ($cek_id_buku) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Duplikat',
            ],
            RestController::HTTP_BAD_REQUEST
        );
    }
    //Jika data tersimpan
    elseif ($this->Buku_model->insertBuku($data) > 0) {
        $this->response(
            [
                'status' => true,
                'response_code' => RestController::HTTP_CREATED,
                'message' => 'Data Berhasil Ditambahkan',
            ],
            RestController::HTTP_CREATED
        );
        //Jika data duplikat
    }  else {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Gagal Menambahkan Data'
            ],
            RestController::HTTP_BAD_REQUEST
        );
    }
}

function bk_put()
    {
        $id_buku = $this->put('id_buku');
        $data = array(
            'judul' => $this->put('judul'),
            'pengarang' => $this->put('pengarang'),
            'penerbit' => $this->put('penerbit'),
            'tahun_terbit' => $this->put('tahun_terbit'),
            'stok' => $this->put('stok'),
            'harga' => $this->put('harga')
        );

        //Jika field id_buku tidak diisi
        if ($id_buku == NULL) {
            $this->response(
                [
                    'status' => $id_buku,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_buku Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Jika data berhasil berubah
        } elseif ($this->Buku_model->updateBuku($data, $id_buku) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data Buku Dengan id_buku '.$id_buku.' Berhasil Diubah',
                ],
                RestController::HTTP_CREATED
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Gagal Mengubah Data',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        }
    }

function bk_delete()
    {
        $id_buku = $this->delete('id_buku');

        //Jika field id_buku tidak diisi
        if ($id_buku == NULL) {
            $this->response(
                [
                    'status' => $id_buku,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_buku Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Kondisi ketika OK
        } elseif ($this->Buku_model->deleteBuku($id_buku) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,
                    'message' => 'Data Buku Dengan id_buku '.$id_buku.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
            );
        //Kondisi gagal
        } else {
            $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Data Buku Dengan id_buku '.$id_buku.' Tidak Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        }
    }

}
