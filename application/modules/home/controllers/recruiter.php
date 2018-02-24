<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyễn Thành Đạt
 * @copyright   PHP TEAM
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class Recruiter extends MY_Controller {
    protected $Langid;
    public function __construct(){
        parent:: __construct();
        $this->load->library('session');
        if($this->session->userdata('langid') == 2){
            $this->lang->load('frontend','english');
            $this->Langid = 2;
        }else{
            $this->lang->load('frontend','vietnamese');
            $this->Langid = 1;
        }
        $this->load->model('cate_model');
        $this->load->model('categorie_model');
        $this->load->model('cago_model');
        $this->load->model('product_model');
        $this->load->model('post_model');
        $this->load->model('banner_model');
        $this->load->model('position_model');//vị trí
        $this->load->model('career_model');// ngành nghề
        $this->load->model('location_model');// Tỉnh thành phố
        $this->load->model('wage_model');// Lương
        $this->load->model('certificate_model');//Bằng cấp
        $this->load->model('exp_model');//EXP
        $this->load->model('recruiter_model');
    }

    public function index(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $data['position'] 		= $this->position_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['career']			= $this->career_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['location']		= $this->location_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['wage']			= $this->wage_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['certificate']	= $this->certificate_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['exp']			= $this->exp_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['title']          = 'Việc làm 24h';
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		$data['post_new']       = $this->post_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post_vip']       = $this->post_model->find_by(array("pro_status"=>1,"vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post']           = $this->getNews();
        $data['content']        = 'recruiter/list';
        @$data['breadcumb'][0]->title = 'Việc làm 24h';
        $data['recruiter_vip']  = $this->getRecruiter($Langid,array('vip' => 1),$limit = NULL);
        $data['recruiter_new']  = $this->getRecruiter($Langid,array('new' => 1),$limit = NULL);
        $this->load->view("post/layout",$data);
    }
    public function search(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
		$dat = array();
		if($this->input->get('career') != '')
		{	
			$data['id_career'] = $dat['id_career'] = $this->input->get('career');
		}
		if($this->input->get('certificate') != '')
		{	
			$data['id_certificate'] = $dat['id_certificate'] = $this->input->get('certificate');
		}
		if($this->input->get('location') != '')
		{	
			$data['id_location'] = $dat['id_location'] = $this->input->get('location');
		}
		if($this->input->get('exp') != '')
		{	
			$data['id_exp'] = $dat['id_exp'] = $this->input->get('exp');
		}
		if($this->input->get('wage') != '')
		{	
			$data['id_wage'] = $dat['id_wage'] = $this->input->get('wage');
		}
		
        $data['position'] 		= $this->position_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['career']			= $this->career_model->find_by(['LangId'=>$Langid, ], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['location']		= $this->location_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['wage']			= $this->wage_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['certificate']	= $this->certificate_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['exp']			= $this->exp_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['title']          = 'Việc làm 24h';
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'recruiter/search';
        @$data['breadcumb'][0]->title = 'Việc làm 24h';
        $data['recruiter']  = $this->getRecruiter($Langid,$dat,$limit = NULL);
        //$data['recruiter_new']  = $this->getRecruiter($Langid,$dat,$limit = NULL);
        $this->load->view("post/layout",$data, $dat);
    }
    public function itemrecruiter($id){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $data['item_recu']      = $this->recruiter_model->find_by(array("pro_status"=>1,"pro_id"=>$id,"LangId"=>$Langid),"*",TRUE,NULL, NULL,NULL);
        $data['title']          = $data['item_recu']->pro_name;
        $data['key']        	= $data['item_recu']->pro_key;
        $data['des']     	 	= $data['item_recu']->pro_des;
        $data['position'] 		= $this->position_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['career']			= $this->career_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['location']		= $this->location_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['wage']			= $this->wage_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['certificate']	= $this->certificate_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['exp']			= $this->exp_model->find_by(['LangId'=>$Langid], $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
//        pre($data['item_recu']);
		$data['post_new']       = $this->post_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post_vip']       = $this->post_model->find_by(array("pro_status"=>1,"vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post']           = $this->getNews();
        $data['content']        = 'recruiter/single';
        @$data['breadcumb'][0]->title    = 'Việc làm 24h';
        $data['breadcumb'][0]->link     = base_url().'page/3/recruiter';
        @$data['breadcumb'][1]->title    = $data['item_recu']->pro_name;
        $data['breadcumb'][1]->link     = '';
        $this->load->view('post/layout',$data);
    }

}