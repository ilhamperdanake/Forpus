<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function informatika(){
		$this->load->view('If_books');
	}
	public function elektro(){
		echo "ini laman elekro";
	}
	public function pwk(){
		echo "ini laman pwk";
	}
}
