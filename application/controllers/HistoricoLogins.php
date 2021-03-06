<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoricoLogins extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('HistoricoLogins_model', 'hlm');
		if ($_SESSION['extends_module'] && $_SESSION['extends_module'] == 'sem_validacao/template') {
			header('Location: /principal');
		}
	}

	public function index()
	{
		$this->blade->view('historico_logins/listar');
	}

	public function Ajax_Datatables()
	{
		$idusuario = $this->session->user_id;
		$where = array('usuario_id' => $idusuario);

		$list = $this->hlm->Get_Datatables("hl", $where);

		$data = array();
		$no = $_POST['start'];
		foreach ($list as $obj) {
			$no++;
			$row = array();
			//    $row[] = $no;
			$row[] = $obj->created;
			$row[] = $obj->ip_address;
			$row[] = $obj->navegador;
			$row[] = $obj->so;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->hlm->count_all("hl", $where),
			"recordsFiltered" => $this->hlm->count_filtered("hl", $where),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
}
