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
		$this->load->library("pagination");
		$data                   			= NULL;
		$data['cate_pro']       			= $this->getCatePro();
		$data['cate_building']  			= $this->getCateBuilding($Langid);
		$data['location']         			= $this->getCateLocation();
		$data['price']         				= $this->landprice_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['area']         				= $this->lands_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);

		$data['banner']         			= $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['info_cate']					= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$id), $select = "cate_name,cate_id,cate_rewrite,cate_parent,cate_id_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
		$data['breadcumb'][]				= new stdClass();

		$config['base_url'] 	= base_url()."/cate-building/".$data['info_cate']->cate_id."/".replace($data['info_cate']->cate_rewrite)."";
		$config['per_page'] 	= 12;
		$config['uri_segment'] 	= "4";
		$config['next_link'] 	= '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>';
		$config['prev_link'] 	= '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>';
		$config['first_link'] 	= '<i class="fa fa-step-backward" aria-hidden="true"></i>';
		$config['last_link'] 	= '<i class="fa fa-step-forward" aria-hidden="true"></i>';

		$start = $this->uri->segment(4);
		if($data['info_cate']->cate_id_parent == 0){
			$data['breadcumb'][0]->title	= $data['info_cate']->cate_name;
			$data['count_land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id_parent"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id_parent"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page'],$offset = $start);
			$config['total_rows'] 	= count($data['count_land']);
		}else{
			$data['count_land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page'],$offset = $start);
			$config['total_rows'] 	= count($data['count_land']);

			$data['info_cate_parent']		= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$data['info_cate']->cate_id_parent), $select = "cate_name,cate_id,cate_rewrite,cate_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['breadcumb'][0]->title	= $data['info_cate_parent']->cate_name;
			$data['breadcumb'][0]->link		= base_url("cate-building")."/".$data['info_cate_parent']->cate_id."/".$data['info_cate_parent']->cate_rewrite;

			@$data['breadcumb'][1]->title	= $data['info_cate']->cate_name;
			$data['breadcumb'][1]->link		= base_url("cate-building")."/".$data['info_cate']->cate_id."/".$data['info_cate']->cate_rewrite;
		}
		$this->pagination->initialize($config);
		$data['title']          			= $data['info_cate']->cate_name;
		@$data['key']        				= $data['info_cate']->cate_key; //lỗi php phiên bản cũ, thêm @
		@$data['des']     	 				= $data['info_cate']->cate_des;
		$data['content'] 					= 'building/list';
		$this->load->view("building/layout",$data);
	}	
	public function search($id){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		
		$this->load->library("pagination");
		$data                   			= NULL;
		$data['cate_pro']       			= $this->getCatePro();
		$data['cate_building']  			= $this->getCateBuilding($Langid);
		$data['location']         			= $this->getCateLocation();
		$data['price']         				= $this->landprice_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['area']         				= $this->lands_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);

		$data['banner']         			= $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['info_cate']					= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$id), $select = "cate_name,cate_id,cate_rewrite,cate_parent,cate_id_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
		$data['breadcumb'][]				= new stdClass();

		$config['base_url'] 	= base_url()."/cate-building/".$data['info_cate']->cate_id."/".replace($data['info_cate']->cate_rewrite)."";
		$config['per_page'] 	= 12;
		$config['uri_segment'] 	= "4";
		$config['next_link'] 	= '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>';
		$config['prev_link'] 	= '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>';
		$config['first_link'] 	= '<i class="fa fa-step-backward" aria-hidden="true"></i>';
		$config['last_link'] 	= '<i class="fa fa-step-forward" aria-hidden="true"></i>';

		//$start = $this->uri->segment(5);
		$start = NULL;

		if($data['info_cate']->cate_id_parent == 0){
			$data['breadcumb'][0]->title	= $data['info_cate']->cate_name;
			$data['count_land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id_parent"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id_parent"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page'],$offset = $start);
			$config['total_rows'] 	= count($data['count_land']);

		}else{
			$data['count_land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"cate_id"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page'],$offset = $start);
			$config['total_rows'] 	= count($data['count_land']);

			$data['info_cate_parent']		= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id ="=>$data['info_cate']->cate_id_parent), $select = "cate_name,cate_id,cate_rewrite,cate_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['breadcumb'][0]->title	= $data['info_cate_parent']->cate_name;
			$data['breadcumb'][0]->link		= base_url("cate")."/".$data['info_cate_parent']->cate_id."/".$data['info_cate_parent']->cate_rewrite;

			@$data['breadcumb'][1]->title	= $data['info_cate']->cate_name;
			$data['breadcumb'][1]->link		= base_url("cate")."/".$data['info_cate']->cate_id."/".$data['info_cate']->cate_rewrite;
		}
		$this->pagination->initialize($config);
		$data['title']          			= $data['info_cate']->cate_name;
		@$data['key']        				= $data['info_cate']->cate_key; //lỗi php phiên bản cũ, thêm @
		@$data['des']     	 				= $data['info_cate']->cate_des;
		//$data['content'] 					= 'building/list';
		$this->load->view("building/list",$data);
	}
    public function search_land($dk,$id){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $this->load->library("pagination");
        $data                   			= NULL;
        $data['cate_pro']       			= $this->getCatePro();
        $data['cate_building']  			= $this->getCateBuilding($Langid);
        $data['location']         			= $this->getCateLocation();
        $data['price']         				= $this->landprice_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['area']         				= $this->lands_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);

        $data['banner']         			= $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['title'] = 'Tìm kiếm';
        $config['per_page'] 	= 12;
        $config['uri_segment'] 	= "4";
        $config['next_link'] 	= '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>';
        $config['prev_link'] 	= '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>';
        $config['first_link'] 	= '<i class="fa fa-step-backward" aria-hidden="true"></i>';
        $config['last_link'] 	= '<i class="fa fa-step-forward" aria-hidden="true"></i>';

        if($dk == 'location'){
            $data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"location_id"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page']);
            @$data['breadcumb'][0]->title   = 'Tìm theo vị trí';
            $data['breadcumb'][0]->link   = '#';

            @$data['breadcumb'][1]->title   = $this->landlocation_model->getlocationname($id);
            $data['breadcumb'][1]->link   = '#';
        }
        if($dk == 'dientich'){
            $data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"area"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page']);
            @$data['breadcumb'][0]->title   = 'Tìm theo diện tích';
            $data['breadcumb'][0]->link   = '#';

            @$data['breadcumb'][1]->title   = $this->lands_model->getareaname($id);
            $data['breadcumb'][1]->link   = '#';
        }
        if($dk == 'gia'){
            $data['land']  					= $this->land_model->find_by($where = array("pro_status"=>1,"price"=>$id,'LangId'=>$Langid), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = $config['per_page']);
			@$data['breadcumb'][0]->title   = 'Tìm theo vị trí';
            $data['breadcumb'][0]->title   = 'Tìm theo khoảng giá';
            $data['breadcumb'][0]->link   = '#';

            @$data['breadcumb'][1]->title   = $this->landprice_model->getcostname($id);
            $data['breadcumb'][1]->link   = '#';
        }

        $data['content'] 					= 'building/list';
        $this->load->view("building/layout",$data);
    }
	public function detail($id){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$data['cate_pro']       			= $this->getCatePro();
		$data['cate_building']  			= $this->getCateBuilding($Langid);
		$data['location']         			= $this->getCateLocation();
		$data['price']         				= $this->landprice_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['area']         				= $this->lands_model->find_by(array("status"=>1,'LangId'=>$Langid),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		
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

			@$data['breadcumb'][1]->title	= $data['info_cate']->cate_name;
			$data['breadcumb'][1]->link		= base_url("cate")."/".$data['info_cate']->cate_id."/".$data['info_cate']->cate_rewrite;
		}
		@$data['title']          		= $data['pro_item']->pro_name;
		@$data['key']        			= $data['pro_item']->pro_key;
		@$data['des']     	 			= $data['pro_item']->pro_des;
		$data['content']         = 'building/detail';
		$this->load->view("building/layout",$data);
	}
	function array_truncate(array $array, $left, $right) {
		$new_array[0] = array_slice($array, $left, count($array) - $left);
		$new_array[1] = array_slice($array, 0, count($array) - $right);
		return $new_array;
	}
}