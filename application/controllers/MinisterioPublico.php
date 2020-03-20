<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MinisterioPublico extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$_SESSION['extends_module'] = 'modulo_mp/template';
		// template roxo
		redirect('principal/');
	}


}
