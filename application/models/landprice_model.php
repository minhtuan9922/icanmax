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
class Landprice_model extends MY_Model {
    public $table = 'tbl_land_price';
    public $key   = 'id';
    public function __construct(){
        parent:: __construct();

    }
    public function getcostname($id){
        $this->db->where('id',$id);
        $data = $this->db->get($this->table)->row_array();
        return $data['name'];
    }
}

/* End of file role_model.php */
/* Location: ./application/modules/admin/models/role_model.php */