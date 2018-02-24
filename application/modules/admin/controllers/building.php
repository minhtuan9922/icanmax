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
class Building extends MY_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
		if($this->session->userdata('langid') == 2){
			$this->lang->load('frontend','english');
		}else{
			$this->lang->load('frontend','vietnamese');
		}
		$this->load->model('cate_model');
		$this->load->model('cago_model');
		$this->load->model('categorie_model');
		$this->load->model('banner_model');

		$this->load->model('land_model');
		$this->load->model('landcate_model');
		$this->load->model('landlocation_model');
		$this->load->model('landprice_model');
		$this->load->model('lands_model');
	}

	public function index($id){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$data                   			= NULL;
		$data['cate_pro']       			= $this->getCatePro();
		$data['cate_building']  			= $this->getCateBuilding($Langid);
		$data['banner']         			= $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['info_cate']					= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$id), $select = "cate_name,cate_id,cate_rewrite,cate_parent,cate_id_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
		$data['breadcumb'][]				= new stdClass();
		if($data['info_cate']->cate_id_parent == 0){
			$data['breadcumb'][0]->title	= $data['info_cate']->cate_name;
			$data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id"=>$id), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

		}else{
			$data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id_parent"=>$id), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['info_cate_parent']		= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$data['info_cate']->cate_id_parent), $select = "cate_name,cate_id,cate_rewrite,cate_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['breadcumb'][0]->title	= $data['info_cate_parent']->cate_name;
			$data['breadcumb'][0]->link		= base_url("cate")."/".$data['info_cate_parent']->cate_id."/".$data['info_cate_parent']->cate_rewrite;

			$data['breadcumb'][1]->title	= $data['info_cate']->cate_name;
			$data['breadcumb'][1]->link		= base_url("cate")."/".$data['info_cate']->cate_id."/".$data['info_cate']->cate_rewrite;
		}
		$data['title']          			= $data['info_cate']->cate_name;
		$data['key']        				= $data['info_cate']->cate_key;
		$data['des']     	 				= $data['info_cate']->cate_des;
		$data['content'] 					= 'building/list';
		$this->load->view("building/layout",$data);
	}
	public function search(){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$data                   = NULL;
		$data['text']			= $this->input->get('q');
		$data['id_menu']		= $this->input->get('menu');
		$where					= array("pro_status"=>1);
		if($data['id_menu'] != 0){
			$where["cate_id"] 	=$data['id_menu'];
		}
		$data['product']  		= $this->product_model->find_like($like = ['pro_name'=>$data['text']],$where, $select = "pro_folderimg,pro_name,pro_id,pro_code,pro_price,cate_id_parent,cate_id,pro_images,pro_name_rewrite", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

		$data['cate_pro']       = $this->getCatePro();
		$data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
		$data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['breadcumb'][]			= new stdClass();
		$data['breadcumb'][0]->title	= 'Tìm kiếm';
		$data['title']          		= 'Tìm kiếm';
		$data['key']        			= '';
		$data['des']     	 			= '';
//		pre($data['product']);
		$data['pro_new'] 				= $this->product_model->find_by($where = array("pro_new"=>1,"pro_status"=>1), $select = "cate_id_parent,pro_avarta,pro_name,pro_code,pro_id,pro_folderimg,pro_price,pro_images,pro_name_rewrite", $is_single_result = FALSE, $order_by = ['key'=>"pro_order",'value'=>"DESC"], $limit = 8,$offset = NULL);
		$data['pro_vip'] 				= $this->product_model->find_by($where = array("pro_vip"=>1,"pro_status"=>1), $select = "cate_id_parent,pro_avarta,pro_name,pro_code,pro_id,pro_folderimg,pro_price,pro_images,pro_name_rewrite", $is_single_result = FALSE, $order_by = ['key'=>"pro_order",'value'=>"DESC"], $limit = 5,$offset = NULL);
		$data['content'] = 'product/search';
		$this->load->view("product/layout",$data);
	}
	public function detail($id){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$data                   			= NULL;
		$data['cate_pro']       			= $this->getCatePro();
		$data['cate_building']  			= $this->getCateBuilding($Langid);
		$data['banner']         			= $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['land_item']					= $this->land_model->find_by($where = array("pro_status"=>1,"pro_id"=>$id), $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
		$data['info_cate']					= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$data['land_item']->cate_id), $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
		$data['breadcumb'][]				= new stdClass();
		if($data['info_cate']->cate_id_parent == 0){
			$data['breadcumb'][0]->title	= $data['info_cate']->cate_name;
		}else{

			$data['info_cate_parent']				= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$data['info_cate']->cate_id_parent), $select = "cate_name,cate_id,cate_rewrite,cate_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['breadcumb'][0]->title	= $data['info_cate_parent']->cate_name;
			$data['breadcumb'][0]->link		= base_url("cate-pro")."/".$data['info_cate_parent']->cate_id."/".$data['info_cate_parent']->cate_rewrite;

			$data['breadcumb'][1]->title	= $data['info_cate']->cate_name;
			$data['breadcumb'][1]->link		= base_url("cate")."/".$data['info_cate']->cate_id."/".$data['info_cate']->cate_rewrite;
		}
		$data['title']          		= $data['pro_item']->pro_name;
		$data['key']        			= $data['pro_item']->pro_key;
		$data['des']     	 			= $data['pro_item']->pro_des;
		$data['content']         = 'building/detail';
		$this->load->view("building/layout",$data);
	}
	function array_truncate(array $array, $left, $right) {
		$new_array[0] = array_slice($array, $left, count($array) - $left);
		$new_array[1] = array_slice($array, 0, count($array) - $right);
		return $new_array;
	}
}