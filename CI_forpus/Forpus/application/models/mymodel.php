<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function index()
	{
		$this->load->view('home');
	}
	public function books(){
		$this->load->view('Books');
	}
	public function info(){
		$this->load->view('Info_buku');
	}
}
