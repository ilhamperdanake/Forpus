<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_akun extends CI_Controller {
	public function signup(){
		$this->load->view('signup');
	}
}
