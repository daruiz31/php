<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter extends CI_Controller {
	
	public function index()
	{
		$this->load->view('counter');
	}
}