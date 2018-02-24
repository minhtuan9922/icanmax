<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Tran Hoang Thien (thienhb12@gmail.com)
 * @copyright   PHP TEAM
 * @link		http://phpandmysql.net
 * @since		Version 1.0
 * @phone       0944418192
 *
 */
class Message_model extends MY_Model {
	public $table = 'tbl_contact';
	public $key   = 'con_id';
	public function __construct(){
		parent:: __construct();
		
	}

	public function get(){
		$this->db->order_by('con_status','ASC');
		return $this->db->get($this->table)->result_array();
	}
	public function view($id){
		$data = array(
			'con_status' => 1
		);
		$this->db->where('con_id', $id);
        $this->db->update($this->table,$data);
		$this->db->where('con_id', $id);
		return $this->db->get($this->table)->row_array();
	}
	public function num(){
		$this->db->where('con_status', '0');
		return $this->db->count_all_results($this->table);
	}
	public function del($id){
		$this->db->where('con_id', $id);
		return $this->db->delete($this->table);
	}


	public function get_cate($where = NULL,$limit = NULL,$offset= NULL,$order = NULL,$odder_by = NULL){
		$param           = array();
		$param['select'] = array('title','id','rewrite_link','description','keyword','images','info','avarta','icon','Order','parent');
		$param['where']  = $where;
		$param['order']  = array($order,$odder_by);
                if($limit != NULL):
                    if($offset){
                            $param['limit']  = array($limit,$offset);
                    }else{
                            $param['limit']  = array($limit);
                    }
                endif;
		return $this->get_list($param);
	}

}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */