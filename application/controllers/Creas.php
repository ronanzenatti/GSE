<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creas extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$_SESSION['extends_module'] = 'modulo_creas/template';
		// template verde
		redirect('principal/');
	}


}
