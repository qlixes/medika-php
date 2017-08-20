<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_Patients extends CI_Controller {

	public function index()
	{
		$this->load->view('all_patients');
	}
}
