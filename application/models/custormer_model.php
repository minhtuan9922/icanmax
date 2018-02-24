<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyễn Thành Đạt
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class Custormer_model extends MY_Model{
	public $table = 'tbl_customer';
	public $key   = 'id';
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		
	}
	//this is rand string activation key
	public function rand_string($length) {
        $str = '';
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
        }
        return $str . microtime();
	}

	//change pass
	public function change_pass($old_password,$new_password,$id)
	{
		$data=[
			'password' => $new_password
		];
		$this->db->where('id',$id );
		$this->db->like('password',$old_password);
		$this->db->update('tbl_customer',$data);
		return $this->db->affected_rows();
	}
}