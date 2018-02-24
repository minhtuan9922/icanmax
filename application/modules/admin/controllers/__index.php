<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyễn Thành Đạt (ntdat.tb@gmail.com)
 * @copyright   PHP TEAM
 * @link		http://nguyenthanhdat.net
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class Index extends MY_Controller {
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
        $this->load->model('product_model');
        $this->load->model('post_model');
		$this->load->model('banner_model');
	}

	public function index(){
	   $Langid                 = 1;
	    if($this->session->userdata('langid') == 2){
            $Langid             = 2;      
        }
		$data                   = NULL;
		$data['config']         = $this->config_model->get_info(1,array('config_title','config_key','config_des','config_email'));
//        $ds = $this->
		$data['title']          = $data['config']['config_title'];
		$data['key']        	= $data['config']['config_key'];
		$data['des']     	 	= $data['config']['config_des'];
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);

        $data['pro_hot']        = $this->product_model->find_by(array("pro_status"=>1,"pro_hot"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['pro_new']        = $this->product_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['pro_vip']        = $this->product_model->find_by(array("pro_status"=>1,"pro_vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        //post hots
        $data['post_new']       = $this->post_model->find_by(array("pro_status"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['recruiter_vip']  = $this->getRecruiter($Langid,'vip',1,$limit = 12);
        // pre($data['post_new']);
		unset($data['config']);
		$this->load->view("layout",$data);
	}
    public function lang(){
        $this->load->library('session');
        $lag = $this->uri->segment(1);
        if($lag == 'vn'){
            $this->session->set_userdata('langid', 1);
        }elseif($lag == 'eng'){
            $this->session->set_userdata('langid', 2);
        }else{
            $this->session->set_userdata('langid', 1);
        }
        redirect(base_url());
    }
	
	
}

/* End of file index.php */
/* Location: ./application/modules/home/controllers/index.php */