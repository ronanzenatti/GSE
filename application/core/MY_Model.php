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
		if ($this->db->insert($this->table, $data))
			return $this->db->insert_id();
		else
			return false;
	}

	/**
	 * Recupera um registro a partir de um ID
	 *
	 * @param integer $id ID do registro a ser recuperado
	 *
	 * @return array
	 */
	function GetById($idname, $id)
	{
		if (is_null($id))
			return false;
		$this->db->where($idname, $id);
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
	function GetAll($sort = 'id', $order = 'asc', $null = true, $where = false)
	{
		if ($where) {
			$this->db->where($where);
		}
		if ($null) {
			$this->db->where('deleted_at IS NULL', null, false);
		}
		$this->db->order_by($sort, $order);
		$query = $this->db->get($this->table);
//		print_r($this->db->last_query());
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return null;
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
	function Update($idname, $id, $data)
	{
		if (is_null($id) || !isset($data))
			return false;
		$this->db->where($idname, $id);
		return $this->db->update($this->table, $data);
	}

	/**
	 * Remove um registro na tabela
	 *
	 * @param integer $int ID do registro a ser removido
	 *
	 *
	 * @return boolean
	 */
	function DeleteLogico($idname, $id, $data)
	{
		if (is_null($id))
			return false;
		$this->db->where($idname, $id);
		return $this->db->update($this->table, $data);
	}

	/**
	 * Remove um registro na tabela
	 *
	 * @param integer $int ID do registro a ser removido
	 *
	 *
	 * @return boolean
	 */
	function Delete($idname, $id)
	{
		if (is_null($id))
			return false;
		$this->db->where($idname, $id);
		return $this->db->delete($this->table);
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
