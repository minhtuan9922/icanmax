<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguy?n Thành ??t (thienhb12@gmail.com)
 * @copyright   PHP
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class Userpage extends MY_Controller {
    protected $Langid;
    public function __construct(){
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
    }
    public function userInfo(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_info';
        $data['active']         = 'user_info';
        if($this->input->post('update') == 1){
            $this->form_validation->set_rules('user_fullname', 'Your fullname', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_mail', 'email', 'required|xss_clean|encode_php_tags|vidal_email|callback_check_mail');
            $this->form_validation->set_rules('user_phone', 'Number phone', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_address', 'Address', 'required|xss_clean|encode_php_tags');

            if ($this->form_validation->run() != FALSE) {
                $aData        = [
                    'fullname'     => $this->input->post('user_fullname'),
                    'email'         => $this->input->post('user_mail'),
                    'phone'        => $this->input->post('user_phone'),
                    'address'      => $this->input->post('user_address'),
                ];
                if($this->session->userdata('ses_user_id') != '') {
                    $id = $this->custormer_model->save($this->session->userdata('ses_user_id'), $aData);
                    if($id){
                        header("Refresh:0");
                    }
                }
            }

        }
        $this->load->view("user/layout",$data);

    }
    public function user_notifications(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_notifications';
        $data['active']         = 'user_notifications';
        $this->load->view("user/layout",$data);
    }
    public function user_message(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_message';
        $data['active']         = 'user_message';
        $this->load->view("user/layout",$data);
    }
    public function user_setup(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_setup';
        $data['active']         = 'user_setup';
        $this->load->view("user/layout",$data);
    }
    public function user_pay(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_pay';
        $data['active']         = 'user_pay';
        $this->load->view("user/layout",$data);
    }
    public function user_history(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_history';
        $data['active']         = 'user_history';
        $this->load->view("user/layout",$data);
    }
    public function user_managerfile(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_managerfile';
        $data['active']         = 'user_managerfile';
        $this->load->view("user/layout",$data);
    }
    public function user_infocompany(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }

        $id_user        = $this->session->userdata('ses_user_id');
        if($id_user == ''){redirect(base_url());}
        $data['user']   = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);

        $data['title']          = 'Infomation user';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_infocompany';
        $data['active']         = 'user_infocompany';
        $this->load->view("user/layout",$data);
    }
}
