<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		if ($this->ion_auth->logged_in()) {
			$this->blade->view($_SESSION["extends_module"]);
		}
	}
}
