<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Buku_model extends CI_Model 
{

    private $_guzzle;

    public function __construct()
    {
        parent::__construct();
        $this->_guzzle = new Client([
            'base_uri' => 'localhost/tubes_pemro3/tubes_pemrograman3/tokobuku/API/buku/bk',
            'auth'  => ['admin', '1234']
        ]);
    }

    public function getAll()
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'keytubes' => 'dhanti'
                ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result['data'];
    }

    public function getById($id_buku)
    {
        $response = $this->_guzzle->request('GET', '', [
            'query' => [
                'keytubes' => 'dhanti',
                'id_buku' => $id_buku
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

    public function delete($id_buku)
    {
        $response = $this->_guzzle->request('DELETE', '', [
            'form_params' => [
            'http_errors' =>false, //menghindari segala jenis http error, biar dapet respon
            'keytubes' => 'dhanti',
            'id_buku' => $id_buku
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }



}