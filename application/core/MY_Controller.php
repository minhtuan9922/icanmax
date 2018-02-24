<?php
/**
 *
 * @package		Adminpro
 * @author		Nguyễn Thành Đạt (ntdat.tb@gmail.com)
 * @copyright   PHP TEAM
 * @link		http://arisite.net
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class My_controller extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		// $this->session->sess_destroy();
	}
	public function checkUserLogin(){
		$this->load->library('session');
		if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				$this->session->sess_destroy();
				redirect(base_url()."admin/login");
			}
	}
	public function find_array($key,$arr)
	{
//		pre($key);
		foreach($arr as $value){
			if($key['user'] == $value['user_name'] && md5($key['pass']) == $value['user_password']){
				return $user = $value;
			}else{
				return false;
			}
		}
	}
	public function getCategory(){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$this->load->model('cate_model');
		$category					= $this->cate_model->find_by($where = array("cate_status"=>1,"cate_top"=>1,"cate_parent"=>1,'LangId'=>$Langid), $select = "cate_id,cate_name,cate_rewrite", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
		$data						= new stdClass();
		$i=0;
		foreach($category as $item){
			$data->$i->cate_name	= $item->cate_name;
			$data->$i->cate_rewrite	= $item->cate_rewrite;
			$data->$i->cate_id		= $item->cate_id;
			$data->$i->child		= $this->cate_model->find_by($where = array("cate_status"=>1,"cate_top"=>1,"cate_parent"=>2,"cate_id_parent"=>$item->cate_id), $select = "cate_id,cate_name,cate_rewrite", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
			$i++;
		}
		return $data;

	}
	public function getCatePro(){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$this->load->model('cate_model');
		$category					= $this->cate_model->find_by($where = array("cate_status"=>1,"cate_id_parent"=>0,'LangId'=>$Langid), $select = "cate_id,cate_name,cate_rewrite", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
		$data						= new stdClass();
		$i=0;
		foreach($category as $item){
			@$data->$i->cate_name	= $item->cate_name;
			@$data->$i->cate_rewrite	= $item->cate_rewrite;
			@$data->$i->cate_id		= $item->cate_id;
			@$data->$i->child		= $this->cate_model->find_by($where = array("cate_status"=>1,"cate_id_parent"=>$item->cate_id), $select = "cate_id,cate_name,cate_rewrite", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
			$i++;
		}
		return $data;
	}
	public function getCateBuilding($langid){
		$this->load->model('landcate_model');
		$category					= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id_parent"=>0,'LangId'=>$langid), $select = "cate_id,cate_name,cate_rewrite,cate_icon", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
		$data						= new stdClass();
		$i=0;
		foreach($category as $item){
			@$data->$i->cate_name	= $item->cate_name;
			@$data->$i->cate_rewrite	= $item->cate_rewrite;
			@$data->$i->cate_id		= $item->cate_id;
			@$data->$i->cate_icon	= $item->cate_icon;
			@$data->$i->child		= $this->landcate_model->find_by($where = array("cate_status"=>1,"cate_id_parent"=>$item->cate_id), $select = "cate_id,cate_name,cate_rewrite", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
			$i++;
		}
		return $data;
	}
	public function getCateLocation(){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}

		$this->load->model('landlocation_model');
		$category					= $this->landlocation_model->find_by(array("status"=>1,'LangId'=>$Langid,"parent_id"=>0),"*",FALSE,NULL, NULL,NULL);
		$data = new stdClass();
		$i=0;
		foreach($category as $item){
			@$data->$i->name	= $item->name;
			@$data->$i->id		= $item->id;
			@$data->$i->child		= $this->landlocation_model->find_by($where = array("status"=>1,"parent_id"=>$item->id), $select = "id,name", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$i++;
		}
		return $data;
	}
	public function getNews(){
		$Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$Langid             = 2;
		}
		$this->load->model('post_model');
		$this->load->model('cago_model');
		$cate_post					= $this->cago_model->find_by($where = array("cate_status"=>1,"cate_id_parent"=>0,'LangId'=>$Langid), $select = "cate_id,cate_name,cate_rewrite", $is_single_result = FALSE, $order_by = array('key'=>"cate_order",'value'=>"DESC"), $limit = NULL,$offset = NULL);
		$data						= new stdClass();
		$i=0;
		foreach($cate_post as $item){
			@$data->$i->cate_name	= $item->cate_name;
			@$data->$i->cate_rewrite	= $item->cate_rewrite;
			@$data->$i->cate_id		= $item->cate_id;
			@$data->$i->child		= $this->post_model->find_by($where = array("pro_status"=>1,"cate_id_parent"=>$item->cate_id), $select = "pro_id,pro_name,pro_name_rewrite,pro_info,pro_img_seo,pro_img_seo_forder", $is_single_result = FALSE, $order_by = array('key'=>"pro_order",'value'=>"DESC"), $limit = null,$offset = NULL);
			$i++;
		}
		return $data;
	}
	public function getRecruiter($lang,$dat = array(),$limit = NULL){

		$this->load->model('recate_model');
		$this->load->model('position_model');//vị trí
		$this->load->model('career_model');// ngành nghề
		$this->load->model('location_model');// Tỉnh thành phố
		$this->load->model('wage_model');// Lương
		$this->load->model('certificate_model');//Bằng cấp
		$this->load->model('exp_model');//EXP
		$this->load->model('recruiter_model');//EXP
		//
		$dat['status'] = 1;
		$dat['LangId'] = $lang;
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$ngay = date("Y-m-d");
		$d=strtotime("-30 day");
		$day = date("Y-m-d", $d);
		//$dat['id_position'] = '';
		$recate			= $this->recate_model->find_by($where = $dat, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
		$data[]			= new stdClass();
		if(count($recate) >0 ){
			$i=0;
			foreach($recate as $item){
				@$data[$i]->recruiter 		= $this->recruiter_model->find_by($where = array("pro_status"=>1,"LangId"=>$lang,'pro_id'=>$item->id_recruiter, 'deadline >'=> $day), $select = "pro_id,pro_name,pro_name_rewrite,deadline,company_name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				if(count($data[$i]->recruiter ) <=0 ){
					continue;
				}
				@$data[$i]->position 		= $this->position_model->find_by($where = array('id'=>$item->id_position), $select = "name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				@$data[$i]->location 		= $this->location_model->find_by($where = array('id'=>$item->id_location), $select = "name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				@$data[$i]->wage 			= $this->wage_model->find_by($where = array('id'=>$item->id_wage), $select = "name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$i++;
			}
		}
		return $data;
	}

	public function getCareer($lang,$limit = NULL){
		$this->load->model('recate_model');
		$this->load->model('career_model');// ngành nghề
		$this->load->model('recruiter_model');//EXP
		//
		$career			= $this->recate_model->find_by($where = array("status"=>1,"LangId"=>$lang,$title_dk=>$value_dk), $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
//		pre($recate);
		$data[]			= new stdClass();
//		if(count($recate) >0 ){
//			$i=0;
//			foreach($recate as $item){
//				$data[$i]->recruiter 		= $this->recruiter_model->find_by($where = array("pro_status"=>1,"LangId"=>$lang,'pro_id'=>$item->id_recruiter), $select = "pro_id,pro_name,pro_name_rewrite,deadline,company_name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
//				$data[$i]->position 		= $this->position_model->find_by($where = array('id'=>$item->id_position), $select = "name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
//				$data[$i]->location 		= $this->location_model->find_by($where = array('id'=>$item->id_location), $select = "name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
//				$data[$i]->wage 			= $this->wage_model->find_by($where = array('id'=>$item->id_wage), $select = "name", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
//				$i++;
//			}
//		}
		return $data;
	}
}