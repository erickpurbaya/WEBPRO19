<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

    public function index()
	{
        $this->load->library('form_validation');
        $data = array(
            'judul' => 'Your Profile | Know Your Meme',
            'user' => $this->input->post('username'),
        );
		$this->load->view('templates/headerUser.php',$data);
		$this->load->view('AboutPage.php');
		$this->load->view('templates/footer');
	}
}