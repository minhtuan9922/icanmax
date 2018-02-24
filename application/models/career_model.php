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
class career_model extends MY_Model {
	public $table = 'tbl_career';
	public $key   = 'id';
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		
	}

	public function list_career($lang_id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where(['status' => '1','LangId' => $lang_id]);
		return $this->db->get()->result();
	}

	public function list_career_profile($lang_id)
	{
		$this->db->select('id,name,LangId,status,
			(
				SELECT count(profile_id) 
				FROM tbl_profile as pro
				WHERE pro.profile_career like CONCAT("%",id,"%")  
			) 
				as count_profile_career',FALSE);
		$this->db->from($this->table);
		$this->db->where(['status' => '1','LangId' => $lang_id]);
		return $this->db->get()->result_array();
	}
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */