<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_Model 
{

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            'base_uri' => 'http://localhost/pemro3/pemro_hari10/ci_rest/mahasiswa/mhs',
            'auth'  => ['admin', '1234']
        ]);
    }

    public function getAll()
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KUNCIREST' => 'poltekpos123'
                ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function getById($id_murid)
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'KUNCIREST' => 'poltekpos123',
                'id_murid' => $id_murid
                ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function save($data)
    {
        $response = $this->_guzzle->request('POST', '', [
            'http_errors' =>false, //menghindari segala jenis http error, biar dapet respon
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

    public function delete($id_murid)
    {
        $response = $this->_guzzle->request('DELETE', '', [
            'form_params' => [
            'http_errors' =>false, //menghindari segala jenis http error, biar dapet respon
            'KUNCIREST' => 'poltekpos123',
            'id_murid' => $id_murid
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }



}