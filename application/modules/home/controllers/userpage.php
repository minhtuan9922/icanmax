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
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('security');
        //libary
        $this->load->library('my_string');
    }
    public function userInfo(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $this->load->helper('security');
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
            $this->form_validation->set_rules('user_fullname', 'Your fullname', 'trim|required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_mail', 'email', 'trim|required|xss_clean|encode_php_tags|valid_email');
            $this->form_validation->set_rules('user_phone', 'Number phone', 'trim|required|xss_clean|encode_php_tags|htmlspecialchars');
            $this->form_validation->set_rules('user_address', 'Address', 'trim|required|xss_clean|encode_php_tags|htmlspecialchars');

            if ($this->form_validation->run() != FALSE) {
                $aData        = [
                'fullname'     => $this->my_string->remove_html_php($this->input->post('user_fullname')),
                'gender'       => $this->input->post('user_gender'),
                'birthday'     => $this->input->post('user_birthday'),
                'email'        => $this->input->post('user_mail'),
                'phone'        => $this->input->post('user_phone'),
                'address'      => $this->input->post('user_address'),
                ];
                if($this->session->userdata('ses_user_id') != '') {
                    $id = $this->custormer_model->save($this->session->userdata('ses_user_id'), $aData);
                    if($id){
                         //gán lại session khi update
                        $user_data                  = array(
                            'ses_user_email'            => $this->input->post('user_mail'),
                            'ses_user_fullname'         =>  $this->my_string->remove_html_php($this->input->post('user_fullname')),
                            );
                        $this->session->set_userdata($user_data);
                        echo '<script>alert("Cập nhật thành công");</script>';
                       
                        header("Refresh:0");
                    }
                }
            }
        }
        //result change password
        if ( $this->session->flashdata('result') ==1)
        {
            echo '<script>alert("thành công");</script>';
        } else if( $this->session->flashdata('result') ==2)
        { 
            echo '<script>alert("thất bại");</script>';
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


        $id_user                = $this->session->userdata('ses_user_id');
        if($id_user == '') { redirect(base_url()); }
        $data['user']           = $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);
        // data profile
        $this->load->model('profile_model');
        $data['profile']  = $this->profile_model->data_profile($this->session->userdata('ses_user_id'));
        //var_dump($data['profile']);
        //
        $data['title']          = 'user managerfile';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
        $data['content']        = 'user/user_managerfile';
        $data['active']         = 'user_managerfile';

        //hoàng
        if ($this->session->flashdata('file_cv') == TRUE)
        {
            echo '<script>alert("một hồ sơ chỉ có 1 file")</script>';
        }
        //update file message
        if ($this->session->flashdata('update_file') == TRUE)
        {
            echo '<script>alert("update thành công")</script>';
        }
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
    /**
     * [change_pass description]
     * name: hoàng
     * @return [type] [void]
     */
    public function change_pass() {
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2)
        {
            $Langid             = 2;
        }
        $id_user        = $this->session->userdata('ses_user_id');
        //redirect home whem session id not isset
        if ($id_user == '') { redirect(base_url()); }
        $data['title']          = 'Infomation user';
        $data['key']            = '';
        $data['des']            = '';
        if($this->input->post('change_password') == 1){
            $this->form_validation->set_rules('old_password', 'old password', 'required|xss_clean');
            $this->form_validation->set_rules('new_password', 'new password', 'required|min_length[5]|xss_clean');
            $this->form_validation->set_rules('enter_new_password', 'enter_new_password', 'required|matches[new_password]|xss_clean');

            if ($this->form_validation->run() != FALSE) 
            {
                $old_password=$this->input->post('old_password');
                $id=$this->session->userdata('ses_user_id');
                $new_password=$this->input->post('new_password');
                if($this->session->userdata('ses_user_id') != '') 
                {
                    $result = $this->custormer_model->change_pass(md5($old_password),md5($new_password),$id);
                    if ($result == true) 
                    {
                        $this->session->set_flashdata('result', '1');
                        redirect(base_url("user-info"));
                    }
                    else {
                        $this->session->set_flashdata('result', '2');
                        redirect(base_url("user-info"));
                    }
                }
            }
            else{
                echo '<script>history.pushState(null,"","user-info");</script>';
                $this->userInfo();
            }

        }else {
            redirect(base_url("user-info"));
        }


    }
}
