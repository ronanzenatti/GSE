<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assistencial extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$_SESSION['extends_module'] = 'modulo_assistencial/template';
		// template branco
		redirect('principal/');
	}


}
