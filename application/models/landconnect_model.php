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
class Landconnect_model extends MY_Model {
	public $table = 'tbl_land_connect';
	public $key   = 'id_land';
	public function __construct(){
		parent:: __construct();
		
	}
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */