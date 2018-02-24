<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_job_model extends CI_Model {

	protected $table='tbl_time_job';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function list_time_job($lang_id)
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

/* End of file time_job_model.php */
/* Location: ./application/models/time_job_model.php */