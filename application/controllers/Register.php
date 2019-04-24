<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Register_model');
		//load library form validation
		
	}

	public function index()
	{
		$this->load->view('Register/register');
	}

	public function form_validation()
	{
		$this->load->library('form_validation');
		$pass = $this->input->post('password');
		$cpass = $this->input->post('passconf');

		if ($pass==$cpass) {
			$this->load->model('Register_model');   
			$data = array(
				"username" => $this->input->post('username'),
				"email" => $this->input->post('email'),
				"password" => $this->input->post('password'),
			);
			$this->Register_model->tambahData($data);
		} else {
			echo 'lol';
		}
	}
}