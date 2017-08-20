<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archived extends CI_Controller {

	public function index()
	{
		$this->load->view('archived');
	}
}
