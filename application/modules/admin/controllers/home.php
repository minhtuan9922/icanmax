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
	class Home extends My_Controller{
		public function __construct(){
			parent:: __construct();
			GLOBAL $Langid;
			$this->load->library('session');
			if($this->session->userdata('langid') == 2){
				$this->lang->load('admin','english');   
				$Langid = 2;
			}else{
				$this->lang->load('admin','vietnamese');
				$Langid = 1;
			}
			$this->load->model('muser');
			$this->checkUserLogin();

		}
		
		public function index()
		{
			$data['title']      = "Home";
			$data['breadcrumb'] = "Home";
			$data['oder']       = "";
			$data['content']   = 'home';
			$data['icon']       = "glyphicon glyphicon-info-sign";
			$data['intro']      = "Introduction";

			$data['home']		= 'class="active"';

			$this->load->view("layout",$data);
		}
		public function lang()
		{
			$lag = $this->uri->segment(2);
			if($lag == 'vn'){
				$this->session->set_userdata('langid', 1);
			}elseif($lag == 'en'){
				$this->session->set_userdata('langid', 2);
			}else{
				$this->session->set_userdata('langid', 1);
			}
			redirect(base_url('admin/home'));
		}
	}