<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class pembeli extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli_model');
        $this->methods['pbl_get']['limit'] = 1000;
        $this->methods['pbl_post']['limit'] = 1000;
    }

    public function pbl_get()
    {
        $id_pembeli = $this->get('id_pembeli');
        $data = $this->Pembeli_model->getDatapembeli($id_pembeli);

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

function pbl_post()
{
    $data = array(
        'id_pembeli' => $this->post('id_pembeli'),
        'nama_pembeli' => $this->post('nama_pembeli'),
        'no_telpon' => $this->post('no_telpon'),
        'alamat' => $this->post('alamat'),
        'email' => $this->post('email')
    );

    $cek_id_pembeli = $this->Pembeli_model->getDatapembeli($this->post('id_pembeli'));

    //Jika semua data wajib diisi
    if ($data['id_pembeli'] == NULL || $data['nama_pembeli_pembeli'] == NULL || $data['no_telpon'] == NULL || $data['alamat'] == NULL || $data['email'] == NULL ) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

    }elseif ($cek_id_pembeli) {
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
    elseif ($this->Pembeli_model->insertpembeli($data) > 0) {
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

function pbl_put()
    {
        $id_pembeli = $this->put('id_pembeli');
        $data = array(
            'nama_pembeli' => $this->put('nama_pembeli'),
            'no_telpon' => $this->put('no_telpon'),
            'alamat' => $this->put('alamat'),
            'email' => $this->put('email')
        );

        //Jika field id_pembeli tidak diisi
        if ($id_pembeli == NULL) {
            $this->response(
                [
                    'status' => $id_pembeli,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_pembeli Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Jika data berhasil berubah
        } elseif ($this->Pembeli_model->updatepembeli($data, $id_pembeli) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data pembeli Dengan id_pembeli '.$id_pembeli.' Berhasil Diubah',
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

function pbl_delete()
    {
        $id_pembeli = $this->delete('id_pembeli');

        //Jika field id_pembeli tidak diisi
        if ($id_pembeli == NULL) {
            $this->response(
                [
                    'status' => $id_pembeli,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_pembeli Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Kondisi ketika OK
        } elseif ($this->Pembeli_model->deletepembeli($id_pembeli) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,
                    'message' => 'Data pembeli Dengan id_pembeli '.$id_pembeli.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
            );
        //Kondisi gagal
        } else {
            $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Data pembeli Dengan id_pembeli '.$id_pembeli.' Tidak Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        }
    }

}
