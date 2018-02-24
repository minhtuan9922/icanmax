<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
class Page extends MY_Controller {

	public function __construct(){
		parent:: __construct();
		GLOBAL $Langid;
		if($this->session->userdata('langid') == 2){
			$this->lang->load('frontend','english');
			$Langid = 2;
		}else{
			$this->lang->load('frontend','vietnamese');
			$Langid = 1;
		}
		$this->load->model('cate_model');
		$this->load->model('cago_model');
		$this->load->model('categorie_model');
		$this->load->model('product_model');
		$this->load->model('post_model');
		$this->load->model('banner_model');
		$this->load->model('contact_model');
	}
	public function intro(){
		GLOBAL $Langid;
		$data= NULL;
		// menu product.
		$data['cate_pro']       = $this->getCatePro();
		$data['cate_building']       = $this->getCateBuilding($Langid);
		$data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
		$data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['content'] 		= 'page/intro';
		$data['title'] 			= 'Giới thiệu về icanmax';
		$data['breadcumb'][]		= new stdClass();
		if($this->session->userdata('langid') == 2){
			$data['viewpage']		= file_get_contents('filetxt/introduction.txt');
			$data['breadcumb'][0]->title	= 'Introduct';
		}else{
			$data['viewpage']		= file_get_contents('filetxt/gioithieu.txt');
			$data['breadcumb'][0]->title	= 'Giới thiệu';
		}

		$data['key']	= '';
		$this->load->view('page/layout',$data);
	}
	public function service(){
		GLOBAL $Langid;
		$data= NULL;
		// menu product.
		$data['cate_pro']       = $this->getCatePro();
		$data['cate_building']       = $this->getCateBuilding($Langid);
		$data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
		$data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['content'] 		= 'page/intro';
		$data['title'] 			= 'Dich vụ';
		$data['breadcumb'][]		= new stdClass();
		if($this->session->userdata('langid') == 2){
			$data['viewpage']			= file_get_contents('filetxt/service.txt');
			$data['breadcumb'][0]->title	= 'Service';
		}else{
			$data['viewpage']			= file_get_contents('filetxt/dichvu.txt');
			$data['breadcumb'][0]->title	= 'Dịch vụ';
		}
		$data['key']	= '';
		$this->load->view('page/layout',$data);
	}

	public function contact(){
		GLOBAL $Langid;
		$data= NULL;
		// menu product.
		$data['cate_pro']       = $this->getCatePro();
		$data['cate_building']       = $this->getCateBuilding($Langid);
		$data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
		$data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['content'] 		= 'page/lien-he';
		$data['title'] 			= $this->lang->line('contact');
		$data['breadcumb'][]		= new stdClass();
		$data['breadcumb'][0]->title	= $this->lang->line('contact');

		if($this->input->post('submitok') == 1){
			$this->form_validation->set_rules('user_name', 'Name', 'required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_email', 'Email', 'required|xss_clean|encode_php_tags|valid_email');
			$this->form_validation->set_rules('user_title', 'Title', 'required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('user_content', 'Content', 'required|xss_clean|encode_php_tags');
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			if($this->form_validation->run() != FALSE){
				$db = array(
					'con_name'   => $this->input->post('user_name'),
					'con_email'  => $this->input->post('user_email'),
					'con_phone'  => $this->input->post('user_phone'),
					'con_title'  => $this->input->post('user_title'),
					'con_full'   => $this->input->post('user_content'),
					'con_date'   => date('y-m-d h:i:s', time()),
				);
				$re_id = $this->contact_model->save(null,$db);
				if(isset($re_id)){
					$data['msg']  = 1;
					$this->load->view("page/layout",$data);
				}
			}else{
				$this->load->view("page/layout",$data);
			}
		}

		$data['key']	= '';
		$this->load->view('page/layout',$data);
	}
	public function index(){
		$data            = array();
		$data['menu']    = 'menu_home';
		$data['cate_building']       = $this->getCateBuilding($Langid);
		$data['config']     = $this->cache_site->get_info_cache('config',900,$this->config_model->get_info(1,array('title','keyword','description','phone','per_page_product','phone','address','email','fan_page','hotline','map')));
		$data['top_view']   = $this->cache_site->get_info_cache('top_view', 900,$this->news_model->get_news(array('status' => 1),10,NULL,'view','DESC')); 
		$data['result']  = $this->cache_site->get_info_cache($key = 'contact',$time = 900,$this->about_model->get_info(1,array('about_us','contact_us')));
		$data['content'] = 'contact/contact';
		$data['class']   = 'category-page';
		$this->load->view("layout",$data);
	}
}