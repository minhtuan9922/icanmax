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
class Post_recruitment_model extends MY_Model {
    public $table = 'tbl_post_recruitment';
    public $key   = 'id';
    public function __construct(){
        parent:: __construct();

    }
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */