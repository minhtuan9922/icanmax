<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		
		log_message('debug', "Controller Class Initialized");
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
        
        public function do_upload($path,$name) { 
            $config['upload_path']   = $path; 
            $temp = explode(".", $_FILES[$name]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $_FILES[$name]["name"] = $newfilename;
            $config['allowed_types'] = 'gif|jpg|png'; 
//            $config['max_size']      = 100; 
//            $config['max_width']     = 1024; 
//            $config['max_height']    = 768;
            $data = array();
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($name)) {
               $data['error'] = array('error' => $this->upload->display_errors());
            }
            else { 
                $return = array('upload_data' => $this->upload->data());
                $data['img'] =$path.$return['upload_data']['file_name'];
               
            }
            return $data;
        }
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */