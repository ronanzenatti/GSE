<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	var $table = ""; //Variável que define o nome da tabela
	var $column_order = Array(); //Colunas para ordenação
	var $column_search = Array(); //Colunas para busca
	var $order = Array(); //Ordenação inicial
	var $dates = Array(); //Campos de Datas
	var $chars = Array(); //Campos de Chars
	var $joins = Array(); //Joins de Tabelas
	var $select = "*"; // SELECT do BD
	var $pk_name = "id";

	//Dados de Auditoria
	var $audit_table = 'audit';
	var $exclude = false;


	/**
	 * Método Construtor
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/**
	 * Insere um registro na tabela
	 *
	 * @param array $data Dados a serem inseridos
	 *
	 * @return boolean
	 */
	function Insert($data)
	{
		if (!isset($data))
			return false;
		if ($this->db->insert($this->table, $data)) {
			$id_insert = $this->db->insert_id();
			if (!$this->exclude) {
				$audit = array(
					'model_id' => $id_insert,
					'model' => $this->table,
					'tipo' => 'C',
					'user_id' => $this->session->user_id,
					'antes' => null,
					'depois' => json_encode($data, JSON_UNESCAPED_UNICODE),
					'ip' => $this->input->ip_address(),
					'created_at' => date('Y-m-d H:i:s'),
				);
				$this->db->insert($this->audit_table, $audit);
			}
			return $id_insert;
		} else
			return false;
	}

	/**
	 * Recupera um registro a partir de um ID
	 *
	 * @param integer $id ID do registro a ser recuperado
	 *
	 * @return array
	 */
	function GetById($idName, $id)
	{
		if (is_null($id))
			return false;
		$this->db->where($idName, $id);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return null;
		}
	}

	/**
	 * Lista todos os registros da tabela
	 *
	 * @param string $sort Campo para ordenação dos registros
	 *
	 * @param string $order Tipo de ordenação: ASC ou DESC
	 *
	 * @return array
	 */
	function GetAll($sort = '1', $order = 'asc', $null = true, $where = false, $prefix = false)
	{
		$this->db->select($this->select);

		foreach ($this->joins as $j) {
			$this->db->join($j['tabela'], $j['juncao'], $j['tipo']);
		}

		if ($where) {
			$this->db->where($where);
		}

		if ($null && $prefix) {
			$this->db->where($prefix . '.deleted_at IS NULL ', null, false);
		} else if ($null && !$prefix) {
			$this->db->where('deleted_at IS NULL ', null, false);
		}

		$this->db->order_by($sort, $order);
		$query = $this->db->get($this->table);
//		print_r($this->db->last_query());
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array();
		}
	}


	/**
	 * Atualiza um registro na tabela
	 *
	 * @param integer $int ID do registro a ser atualizado
	 *
	 * @param array $data Dados a serem inseridos
	 *
	 * @return boolean
	 */
	function Update($id, $data)
	{
		$old = array();

		$data_old = $this->GetById($this->pk_name, $id);

		if (is_null($id) || !isset($data))
			return false;
		else {
			$this->db->where($this->pk_name, $id);
			if ($this->db->update($this->table, $data)) {

				$data = array_diff($data, $data_old);
				unset($data[$this->pk_name]);
				unset($data['deleted_at']);

				foreach ($data as $key => $v) {
					$old[$key] = $data_old[$key];
				}

				$audit = array(
					'model_id' => $id,
					'model' => $this->table,
					'tipo' => 'U',
					'user_id' => $this->session->user_id,
					'antes' => json_encode($old, JSON_UNESCAPED_UNICODE),
					'depois' => json_encode($data, JSON_UNESCAPED_UNICODE),
					'ip' => $this->input->ip_address(),
					'created_at' => date('Y-m-d H:i:s'),
				);

				$this->db->insert($this->audit_table, $audit);

				return $id;
			}
		}
	}

	/**
	 * Remove um registro na tabela
	 *
	 * @param integer $int ID do registro a ser removido
	 *
	 *
	 * @return boolean
	 */
	function DeleteLogico($id)
	{
		$data_old = $this->GetById($this->pk_name, $id);
		$data = array(
			'deleted_at' => date('Y-m-d H:i:s')
		);

		if (is_null($id))
			return false;
		else {
			$this->db->where($this->pk_name, $id);
			if ($this->db->update($this->table, $data)) {
				$audit = array(
					'model_id' => $id,
					'model' => $this->table,
					'tipo' => 'D',
					'user_id' => $this->session->user_id,
					'antes' => json_encode($data_old, JSON_UNESCAPED_UNICODE),
					'depois' => json_encode($data, JSON_UNESCAPED_UNICODE),
					'ip' => $this->input->ip_address(),
					'created_at' => date('Y-m-d H:i:s'),
				);

				$this->db->insert($this->audit_table, $audit);
				return true;
			} else {
				return false;
			}
		}

	}

	/**
	 * Remove um registro na tabela
	 *
	 * @param integer $int ID do registro a ser removido
	 *
	 *
	 * @return boolean
	 */
	function Delete($id)
	{
		$data_old = $this->GetById($this->pk_name, $id);

		if (is_null($id))
			return false;
		$this->db->where($this->pk_name, $id);
		if ($this->db->delete($this->table)) {
			$audit = array(
				'model_id' => $id,
				'model' => $this->table,
				'tipo' => 'D',
				'user_id' => $this->session->user_id,
				'antes' => json_encode($data_old, JSON_UNESCAPED_UNICODE),
				'depois' => null,
				'ip' => $this->input->ip_address(),
				'created_at' => date('Y-m-d H:i:s'),
			);

			$this->db->insert($this->audit_table, $audit);
			return true;
		} else {
			return false;
		}
	}

	function Datatables_Query($prefix = null, $where = false)
	{
		$this->db->select($this->select);
		$this->db->from($this->table);

		if ($where) {
			$this->db->where($where);
		}

		foreach ($this->joins as $j) {
			$this->db->join($j['tabela'], $j['juncao'], $j['tipo']);
		}

		$i = 0;

		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) {
				$value = $_POST['search']['value'];
				foreach ($this->dates as $d) {
					if ($item == $d) {
						$value = implode('-', array_reverse(explode('/', $value)));
					}
				}

				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $value);
				} else {
					$this->db->or_like($item, $value);
				}
				if (count($this->column_search) - 1 == $i) {
					$this->db->group_end();
				}
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}

		if ($prefix) {
			$this->db->where($prefix . '.deleted_at IS NULL ', null, false);
		} else {
			$this->db->where('deleted_at IS NULL ', null, false);
		}
	}

	function Get_Datatables($prefix = null, $where = false)
	{
		$this->Datatables_Query($prefix, $where);
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		/*echo "<pre>";
        print_r($this->db->last_query());
        exit();*/
		return $query->result();
	}

	function Count_Filtered($prefix = null, $where = false)
	{
		$this->Datatables_Query($prefix, $where);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function Count_All($prefix = null, $where = false)
	{
		$this->db->from($this->table);

		if ($where) {
			$this->db->where($where);
		}

		foreach ($this->joins as $j) {
			$this->db->join($j['tabela'], $j['juncao'], $j['tipo']);
		}
		if ($prefix) {
			$this->db->where($prefix . '.deleted_at IS NULL ', null, false);
		} else {
			$this->db->where('deleted_at IS NULL ', null, false);
		}
		return $this->db->count_all_results();
	}

}
/* End of file */
