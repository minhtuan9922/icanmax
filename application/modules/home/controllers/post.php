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
class Post extends MY_Controller {
	public function __construct(){
		parent:: __construct();
        $this->load->library('session');
		GLOBAL $Langid;
        if($this->session->userdata('langid') == 2){
            $this->lang->load('frontend','english');  
			$Langid = 2;
        }else{
            $this->lang->load('frontend','vietnamese');
			$Langid = 1;
        }
		$this->load->model('cate_model');
        $this->load->model('categorie_model');
        $this->load->model('cago_model');
        $this->load->model('product_model');
        $this->load->model('post_model');
        $this->load->model('banner_model');
	}

	public function index(){
        GLOBAL $Langid;
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['title']          = 'Tin tức';
        $data['cate_pro']       = $this->getCatePro();
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['post_new']       = $this->post_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post_vip']       = $this->post_model->find_by(array("pro_status"=>1,"vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post']           = $this->getNews();
        $data['content']        = 'post/list';
        @$data['breadcumb'][0]->title = 'Tin tức';
        $data['key']    = '';
        $this->load->view("post/layout",$data);
	}
    public function catepost($id){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $data                   = NULL;
        $data['item_cate']      = $this->cago_model->find_by(array("cate_status"=>1,"cate_id"=>$id,"LangId"=>$Langid),"*",TRUE,NULL, NULL,NULL);
        $data['item_post']      = $this->post_model->find_by(array("pro_status"=>1,"cate_id_parent"=>$id,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), NULL,NULL);
        $data['title']          = $data['item_cate']->cate_name;
        $data['key']        	= $data['item_cate']->cate_key;
        $data['des']     	 	= $data['item_cate']->cate_des;

        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['post_new']       = $this->post_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post_vip']       = $this->post_model->find_by(array("pro_status"=>1,"vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post']           = $this->getNews();

        $data['content']        = 'post/list_item_cate';
        @$data['breadcumb'][0]->title    = 'Tin tức';
        $data['breadcumb'][0]->link     = base_url().'page/5/news';
        @$data['breadcumb'][1]->title    = $data['item_cate']->cate_name;
        $data['breadcumb'][1]->link     = '';
        $data['key']    = '';
        $this->load->view('post/layout',$data);
    }
    public function itempost($id){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $data                   = NULL;
        $data['item_post']      = $this->post_model->find_by(array("pro_status"=>1,"pro_id"=>$id,"LangId"=>$Langid),"*",TRUE,NULL, NULL,NULL);
        @$data['title']          = $data['item_cate']->cate_name;
        @$data['key']        	= $data['item_cate']->cate_key;
        @$data['des']     	 	= $data['item_cate']->cate_des;

        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['post_new']       = $this->post_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post_vip']       = $this->post_model->find_by(array("pro_status"=>1,"vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['post']           = $this->getNews();

        $data['content']        = 'post/single';
        @$data['breadcumb'][0]->title    = 'Tin tức';
        $data['breadcumb'][0]->link     = base_url().'page/5/news';
        @$data['breadcumb'][1]->title    = $data['item_post']->pro_name;
        $data['breadcumb'][1]->link     = '';
        $data['key']    = '';
        $this->load->view('post/layout',$data);
    }
    private function ListSpecialized(){
        $this->load->model('specialized_model');
        $this->load->model('post_recruitment_model');
        $specialized       = $this->specialized_model->find_by(array("status"=>1,"LangId"=>$this->Langid),"id,name",FALSE,NULL, NULL,NULL);
        $datas[]  = new stdClass();
        $i=0;
        foreach ($specialized as $item){
            $datas[$i]->id              = $item->id;
            $datas[$i]->name            = $item->name;
            $param['where']=array("status"=>1,'specialized_id'=>$item->id,"LangId"=>$this->Langid);
            $datas[$i]->number          = $this->post_recruitment_model->get_total($param);
            $i++;
        }
        return $datas;
    }

}