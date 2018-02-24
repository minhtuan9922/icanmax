<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends MY_Controller {

	protected $Langid;
	protected $data;

	public function __construct()
	{
		parent:: __construct();
		date_default_timezone_set("asia/ho_chi_minh");
		$this->load->library('session');
		if($this->session->userdata('langid') == 2){
			$this->lang->load('frontend','english');
			$this->Langid = 2;
		}else{
			$this->lang->load('frontend','vietnamese');
			$this->Langid = 1;
		}
		$this->load->model('config_model');
		$this->load->model('location_model');
		$this->load->model('custormer_model');
		$this->load->model('cate_model');
		$this->load->model('cago_model');
		$this->load->model('categorie_model');
		$this->load->model('product_model');
		$this->load->model('post_model');
		$this->load->model('banner_model');
		$this->load->model('profile_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('date');
		//general
		$this->Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$this->Langid             = 2;
		}
		// menu product.
		$this->data['cate_pro']       = $this->getCatePro();
		$this->data['cate_building']       = $this->getCateBuilding($this->Langid);
		$this->data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$this->Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
		$this->data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		//my_string
		$this->load->library('my_string');
		//hoang
		$this->load->model('wage_model');
		$this->data['wage']			= $this->wage_model->list_wage($this->Langid);
		//career
		$this->load->model('career_model');
		$this->data['career']		= $this->career_model->list_career($this->Langid);
		//location
		$this->load->model('location_model');
		$this->data['location']		= $this->location_model->list_location($this->Langid);
		//exp
		$this->load->model('exp_model');
		$this->data['exp']			= $this->exp_model->list_exp($this->Langid);
		//education
		$this->load->model('education_model');
		$this->data['education']	= $this->education_model->list_education($this->Langid);
		//time job
		$this->load->model('time_job_model');
		$this->data['time_job']		= $this->time_job_model->list_time_job($this->Langid);
		//target
		$this->load->model('target_model');
		$this->data['target']		= $this->target_model->list_target($this->Langid);
		//language
		$this->load->model('language_model');
		$this->data['language']		= $this->language_model->list_language($this->Langid);
	}

	public function index()
	{
		// career search
	 	$this->data['search_career']		= $this->career_model->list_career_profile($this->Langid);
	 	// location search
	 	$this->data['search_location']		= $this->location_model->list_location_profile($this->Langid);
	 	$this->data['profile']				= $this->profile_model->list_profile();
	 	$this->data['number_search']		= count($this->data['profile']);

	 	//view and const	
	 	$this->data['profile_details']		= 'user-managerfile/view-profile';
		$this->data['title']        		= 'Nhà tuyển dụng';
		$this->data['key']        			= '';
		$this->data['des']     	 			= '';
		$this->data['active_employer']		= TRUE;
		$this->data['content']      		= 'employer/content';
		$this->load->view("employer/layout",$this->data);
	}
}

/* End of file employer.php */
/* Location: ./application/modules/home/controllers/employer.php */