<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class kategori extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->methods['kat_get']['limit'] = 1000;
        $this->methods['kat_post']['limit'] = 1000;
    }

    public function kat_get()
    {
        $id_kategori = $this->get('id_kategori');
        $data = $this->Kategori_model->getDatakategori($id_kategori);

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

function kat_post()
{
    $data = array(
        'id_kategori' => $this->post('id_kategori'),
        'id_buku' => $this->post('id_buku'),
        'jenis_kategori' => $this->post('jenis_kategori'),
        'deskripsi' => $this->post('deskripsi'),
        'update_at' => $this->post('update_at')
    );

    $cek_id_kategori = $this->Kategori_model->getDatakategori($this->post('id_kategori'));

    //Jika semua data wajib diisi
    if ($data['id_kategori'] == NULL || $data['id_buku_kategori'] == NULL || $data['jenis_kategori'] == NULL || $data['deskripsi'] == NULL || $data['update_at'] == NULL ) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

    }elseif ($cek_id_kategori) {
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
    elseif ($this->Kategori_model->insertkategori($data) > 0) {
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

function kat_put()
    {
        $id_kategori = $this->put('id_kategori');
        $data = array(
            'id_buku' => $this->put('id_buku'),
            'jenis_kategori' => $this->put('jenis_kategori'),
            'deskripsi' => $this->put('deskripsi'),
            'update_at' => $this->put('update_at')
        );

        //Jika field id_kategori tidak diisi
        if ($id_kategori == NULL) {
            $this->response(
                [
                    'status' => $id_kategori,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_kategori Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Jika data berhasil berubah
        } elseif ($this->Kategori_model->updatekategori($data, $id_kategori) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data kategori Dengan id_kategori '.$id_kategori.' Berhasil Diubah',
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

function kat_delete()
    {
        $id_kategori = $this->delete('id_kategori');

        //Jika field id_kategori tidak diisi
        if ($id_kategori == NULL) {
            $this->response(
                [
                    'status' => $id_kategori,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_kategori Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Kondisi ketika OK
        } elseif ($this->Kategori_model->deletekategori($id_kategori) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,
                    'message' => 'Data kategori Dengan id_kategori '.$id_kategori.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
            );
        //Kondisi gagal
        } else {
            $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Data kategori Dengan id_kategori '.$id_kategori.' Tidak Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        }
    }

}
