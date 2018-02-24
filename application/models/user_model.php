<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyễn Thành Đạt
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class User_model extends MY_Model{
	public $table = 'tbl_user';
	public $key   = 'user_id';
	public function __construct(){
		parent:: __construct();
		
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
	
}