<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Pemasukan_model extends CI_Model 
{

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            'base_uri' => 'http://localhost/pemro3/tugas/tugas_hari10/1204061_NurTri_pertemuan9/API/pemasukan/pemasukan',
            'auth'  => ['admin', '1234']
        ]);
    }

    public function getAll()
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KUNCIREST' => 'kunci123'
                ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function getById($id_pemasukan)
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KUNCIREST' => 'kunci123',
                'id_pemasukan' => $id_pemasukan
                ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function save($data)
    {
        $response = $this->_guzzle->request('POST', '', [
            // 'http_errors' =>false, //menghindari segala jenis http error, biar dapet respon
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

    public function update($data)
    {
        $response = $this->_guzzle->request('PUT', '', [
            'http_errors' =>false, //menghindari segala jenis http error, biar dapet respon
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

    public function delete($id_pemasukan)
    {
        $response = $this->_guzzle->request('DELETE', '', [
            'form_params' => [
            'http_errors' =>false, //menghindari segala jenis http error, biar dapet respon
            'KUNCIREST' => 'kunci123',
            'id_pemasukan' => $id_pemasukan
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }



}