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
class position_model extends MY_Model {
	public $table = 'tbl_position';
	public $key   = 'id';
	public function __construct(){
		parent:: __construct();
		
	}
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */