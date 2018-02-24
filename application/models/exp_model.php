<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyen Thanh Dạt
 * @copyright   PHP TEAM
 * @link		http://ariweb.net
 * @since		Version 1.0
 * @phone       0969730726
 *
 */
class exp_model extends MY_Model {
	public $table = 'tbl_exp';
	public $key   = 'id';
	public function __construct(){
		parent:: __construct();
		
	}

	public function list_exp($lang_id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where(['status' => '1','LangId' => $lang_id]);
		return $this->db->get()->result_array();
	}
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */