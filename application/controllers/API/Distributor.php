<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/Format.php';
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class distributor extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Distributor_model');
        $this->methods['dist_get']['limit'] = 1000;
        $this->methods['dist_post']['limit'] = 1000;
    }

    public function dist_get()
    {
        $id_dist = $this->get('id_dist');
        $data = $this->Distributor_model->getDatadistributor($id_dist);

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

function dist_post()
{
    $data = array(
        'id_dist' => $this->post('id_dist'),
        'nama_dist' => $this->post('nama_dist'),
        'no_telpon' => $this->post('no_telpon'),
        'alamat' => $this->post('alamat'),
        'email' => $this->post('email')
    );

    $cek_id_dist = $this->Distributor_model->getDatadistributor($this->post('id_dist'));

    //Jika semua data wajib diisi
    if ($data['id_dist'] == NULL || $data['nama_dist_distributor'] == NULL || $data['no_telpon'] == NULL || $data['alamat'] == NULL || $data['email'] == NULL ) {
        $this->response(
            [
                'status' => false,
                'response_code' => RestController::HTTP_BAD_REQUEST,
                'message' => 'Data Yang Dikirim Tidak Boleh Ada Yang Kosong',
            ],
            RestController::HTTP_BAD_REQUEST
        );

    }elseif ($cek_id_dist) {
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
    elseif ($this->Distributor_model->insertdistributor($data) > 0) {
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

function dist_put()
    {
        $id_dist = $this->put('id_dist');
        $data = array(
            'nama_dist' => $this->put('nama_dist'),
            'no_telpon' => $this->put('no_telpon'),
            'alamat' => $this->put('alamat'),
            'email' => $this->put('email')
        );

        //Jika field id_dist tidak diisi
        if ($id_dist == NULL) {
            $this->response(
                [
                    'status' => $id_dist,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_dist Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Jika data berhasil berubah
        } elseif ($this->Distributor_model->updatedistributor($data, $id_dist) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_CREATED,
                    'message' => 'Data distributor Dengan id_dist '.$id_dist.' Berhasil Diubah',
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

function dist_delete()
    {
        $id_dist = $this->delete('id_dist');

        //Jika field id_dist tidak diisi
        if ($id_dist == NULL) {
            $this->response(
                [
                    'status' => $id_dist,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'id_dist Tidak Boleh Kosong',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        //Kondisi ketika OK
        } elseif ($this->Distributor_model->deletedistributor($id_dist) > 0) {
            $this->response(
                [
                    'status' => true,
                    'response_code' => RestController::HTTP_OK,
                    'message' => 'Data distributor Dengan id_dist '.$id_dist.' Berhasil Dihapus',
                ],
                RestController::HTTP_OK
            );
        //Kondisi gagal
        } else {
            $this->response(
                [
                    'status' => false,
                    'response_code' => RestController::HTTP_BAD_REQUEST,
                    'message' => 'Data distributor Dengan id_dist '.$id_dist.' Tidak Ditemukan',
                ],
                RestController::HTTP_BAD_REQUEST
            );
        }
    }

}
