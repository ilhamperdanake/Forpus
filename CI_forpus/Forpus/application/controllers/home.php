<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function info(){
		$this->load->view('');
	}
	public function login(){
		$this->load->view('login');
	}
	public function signup(){
		$this->load->view('signup');
	}
}
