<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	public function index()
	{
		$this->load->view('Info');
	}
}
