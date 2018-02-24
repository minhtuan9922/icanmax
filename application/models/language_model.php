<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_model extends CI_Model {

	protected $table='tbl_language';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function list_language($lang_id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where(['status' => '1','LangId' => $lang_id]);
		return $this->db->get()->result_array();
	}

	function insert($options = array()) 
	{
		$this->db->insert($this->table, $options);
	}

	function truncate()
	{
		$this->db->truncate($this->table);
	}
}

/* End of file language_model.php */
/* Location: ./application/models/language_model.php */