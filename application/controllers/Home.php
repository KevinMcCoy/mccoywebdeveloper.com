<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $this->load->helper('html');
		// $this->load->helper('url');

		$data['title'] = 'Welcome to McCoy Web Developer!';

		// $data['data'] = $data;


		$this->load->view('list_git', $data);
	}

}
