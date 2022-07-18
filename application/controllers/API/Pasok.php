<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class pasok extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasok_model');
        $this->methods['psk_get']['limit'] = 1000;
        $this->methods['psk_post']['limit'] = 1000;
    }

    public function psk_get()
    {
        $id_pasok = $this->get('id_pasok');
        $data = $this->Pasok_model->getDatapasok($id_pasok);

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

function psk_post()
{
    $data = array(
        'id_pasok' => $this->post('id_pasok'),
        'id_dist' => $this->post('id_dist'),
        'nama_barang' => $this->post('nama_barang'),
        'harga_barang' => $this->post('harga_barang'),
        'jumlah' => $this->post('jumlah'),
        'tanggal' => $this->post('tanggal')
    );

    $cek_id_pasok = $this->Pasok_model->getDatapasok($this->post('id_pasok'));

    //Jika semua data wajib diisi
    if ($data['id_pasok'] == NULL || $data['id_dist_pasok'] == NULL || $data['nama_barang'] == NULL || $data['harga_barang'] == NULL || $data['jumlah'] == NULL || $data['tanggal'] == NULL ) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

    }elseif ($cek_id_pasok) {
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
    elseif ($this->Pasok_model->insertpasok($data) > 0) {
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

function psk_put()
    {
        $id_pasok = $this->put('id_pasok');
        $data = array(
            'id_dist' => $this->put('id_dist'),
            'nama_barang' => $this->put('nama_barang'),
            'harga_barang' => $this->put('harga_barang'),
            'jumlah' => $this->put('jumlah'),
            'tanggal' => $this->put('tanggal')
        );

        //Jika field id_pasok tidak diisi
        if ($id_pasok == NULL) {
            $this->response(
                [
                    'status' => $id_pasok,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_pasok Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Jika data berhasil berubah
        } elseif ($this->Pasok_model->updatepasok($data, $id_pasok) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data pasok Dengan id_pasok '.$id_pasok.' Berhasil Diubah',
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

function psk_delete()
    {
        $id_pasok = $this->delete('id_pasok');

        //Jika field id_pasok tidak diisi
        if ($id_pasok == NULL) {
            $this->response(
                [
                    'status' => $id_pasok,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_pasok Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Kondisi ketika OK
        } elseif ($this->Pasok_model->deletepasok($id_pasok) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,
                    'message' => 'Data pasok Dengan id_pasok '.$id_pasok.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
            );
        //Kondisi gagal
        } else {
            $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Data pasok Dengan id_pasok '.$id_pasok.' Tidak Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        }
    }

}
