<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Key_model');

	}

	public function index()
	{
		$this->load->view('Home');
	}

	public function Create1()
	{
		$this->load->view('Create');
	}

	public function fungsiCreate()
	{

		// $user_id = $this->input->post('user_id');
		$key = $this->input->post('key');
		// $level = $this->input->post('level');
		// $date_created = $this->input->post('date_created');

		$ArrInsert = array(
			// 'user_id' => $user_id,
			'key' => $key,
			// 'level' => $level,
			// 'date_created' => $date_created
		);

		$this->Key_model->insertKey($ArrInsert);
		redirect(base_url('Home/Succes'));

	}

	public function Succes()
	{
		$this->load->view('Succes');
	}
}
