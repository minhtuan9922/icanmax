<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}
	public function index()
	{
<<<<<<< HEAD
		$str='hoang';
		echo $str;
		$this->output->cache(600);
=======
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			//$this->load->view('myform');
		}
		else
		{
			//$this->load->view('formsuccess');
		}
>>>>>>> 23e57290ebedb3e7350485fded3fc4fbb63ec68b
		$this->load->view('welcome_message');
		//$this->output->delete_cache();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */