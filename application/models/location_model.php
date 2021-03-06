<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyễn thành Đạt (ntdat.tb@gmail.com)
 * @copyright   PHP
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class Location_model extends MY_Model {
    public $table = 'tbl_location';
    public $key   = 'id';
    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function list_location($lang_id)
    {
    	$this->db->select('*');
    	$this->db->from($this->table);
    	$this->db->where(['status' => '1', 'LangId' => $lang_id]);
    	return $this->db->get()->result_array();
    }

    public function list_location_profile($lang_id)
    {
        $this->db->select('id,name,LangId,status,
            (
                SELECT count(profile_id) 
                FROM tbl_profile as pro
                WHERE pro.profile_location like CONCAT("%",id,"%")  
            ) 
                as count_profile_location',FALSE);
        $this->db->from($this->table);
        $this->db->where(['status' => '1','LangId' => $lang_id]);
        return $this->db->get()->result_array();
    }
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */