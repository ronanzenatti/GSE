<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoricoLogins extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('HistoricoLogins_model', 'hlm');
	}

	public function index()
	{
		$this->blade->view('historico_logins/listar');
	}

	public function Ajax_Datatables()
	{
		$idusuario = $this->session->user_id;
		$where = ['idusuario', $idusuario];

		$list = $this->hlm->Get_Datatables(null, $where);

		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->created_at;
			$row[] = $obj->ip_address;
			$row[] = $obj->navegador;
			$row[] = $obj->so;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->hlm->count_all(null, $where),
			"recordsFiltered" => $this->hlm->count_filtered(null, $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
}
