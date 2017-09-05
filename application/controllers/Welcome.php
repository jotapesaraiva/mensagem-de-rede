<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header.php');
		$this->load->view('template/navi.php');
		//$this->load->view('welcome_message');
		$this->load->view('template/footer.html');
	}
}
