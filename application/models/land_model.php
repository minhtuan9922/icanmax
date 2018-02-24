<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguy?n Th�nh ??t
 * @copyright   PHP DEV
 * @mail		ntdat.tb@gmail.com
 * @since		Version 1.0
 * @phone       0969730726
 *
 */
class Land_model extends MY_Model {
	public $table = 'tbl_land';
	public $key   = 'pro_id';
	public function __construct(){
		parent:: __construct();
		
	}
}