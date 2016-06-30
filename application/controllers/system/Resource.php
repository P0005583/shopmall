<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller {

	public function index()
	{
		$nav['first'] = 'system';
		$nav['sec'] = 'resource';
		$this->load->view('header');
		$this->load->view('nav_left', $nav);
		$this->load->view('system/resource_index');
		$this->load->view('footer');
	}
}
