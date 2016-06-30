<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$nav['first'] = 'dashboard';
		$nav['sec'] = '';
		$nav['thd'] = '';
		$this->load->view('header');
		$this->load->view('nav_left', $nav);
		$this->load->view('index');
		$this->load->view('footer');
	}
}
