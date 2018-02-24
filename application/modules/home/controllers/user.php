<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Nguyễn Thành Đạt (thienhb12@gmail.com)
 * @copyright   PHP
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class User extends MY_Controller {
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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
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

	public function logout(){
        $data = $this->session->all_userdata();
        $this->session->unset_userdata($data);
        redirect(base_url());
    }
    public function login(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if($this->input->post()) 
        {
            $this->form_validation->set_rules('user_pass', 'user_pass', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_email', 'user_email', 'required|xss_clean|encode_php_tags|vidal_email');
            if($this->form_validation->run() != FALSE){
                $email                          = $this->input->post('user_email');
                $pass                           = md5($this->input->post('user_pass'));
                $user                           = $this->custormer_model->find_by(array("status !="=>0,"email"=>$email,"password"=>$pass),"*",TRUE,NULL, NULL,NULL);
                $this->load->library('session');
                if(!empty($user) && count($user) >0):
                    $user_data                  = array(
                        'ses_user_email'            => $user->email,
                        'ses_user_id'               => $user->id,
                        'ses_user_fullname'         => $user->fullname,
                        'ses_user_img'              => $user->img,
                        'ses_user_type'             => $user->type,
                    );
                    $this->session->set_userdata($user_data);
                    die('1');
                else:
                    die("2");
                endif;
            }else{
                die("2");
            }
        }
    }
    public function regis(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if($this->input->post()){
            $this->form_validation->set_rules('user_fullname', 'Your fullname', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_mail', 'email', 'required|xss_clean|encode_php_tags|vidal_email|callback_check_mail');
            $this->form_validation->set_rules('user_pass', 'password', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_repass', 'Repeat password', 'required|xss_clean|encode_php_tags|matches[user_pass]');
            if($this->form_validation->run() != FALSE)
            {
                if($this->input->post('yes') == 1)
                {
                    $data       = [
                        'fullname'      => $this->input->post('user_fullname'),
                        'gender'        => $this->input->post('user_gender'),
                        'password'      => md5($this->input->post('user_pass')),
                        'email'         => $this->input->post('user_mail'),
                        'type'          => $this->input->post('user_is'),
                        "status"        => 1,
                        "creatdate"     => date("Y-m-d H:i:s", time()),//time(),
                    ];
                    $id_user        = $this->custormer_model->save($id=false,$data);
                    if(isset($id_user) && $id_user != 0){
                        $user       = $this->custormer_model->find_by(array("status"=>1,"id"=>$id_user),"*",TRUE,NULL, NULL,NULL);
                        if(!empty($user) && count($user) >0):
                            $user_data                  = array(
                                'ses_user_email'            => $user->email,
                                'ses_user_id'               => $user->id,
                                'ses_user_fullname'         => $user->fullname,
                                'ses_user_img'              => $user->img,
                                'ses_user_type'             => $user->type,
                            );
                            $this->session->set_userdata($user_data);
                            //model
                            $this->load->model('profile_model');
                            $this->profile_model->insert_profile($user->id);
                            die('1');
                        else:
                            die("2");
                        endif;
                        die('1');
                    }else
                    {
                        die('2');
                    }
                }
                else
                {
                    die('2');
                }
            }else{
                die("2");
            }
        }
    }
    public function company()
    {
        $data['content'] = 'company';
        $data                    = NULL;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('custormer_model');
        $data['config']         = $this->config_model->get_info(1,array('config_title','config_key','config_des','config_email'));
        $data['location']       = $this->location_model->find_by(array("status"=>1,"LangId"=>$this->Langid),"*",FALSE,array('key'=>"id",'value'=>"DESC"), NULL,NULL);
        $data['title']          = $data['config']['config_title'];
        $data['key']        	= $data['config']['config_key'];
        $data['des']     	 	= $data['config']['config_des'];
        $data['content']        = 'company';
        $data['categorie']      = $this->categorie_model->find_by(array("cago_status"=>1,"LangId"=>$this->Langid),"cago_id,cago_name,cago_rewrite",FALSE,array('key'=>"cago_order",'value'=>"DESC"), NULL,NULL);
        if($this->input->post('postok')==1){
            $this->form_validation->set_rules('fullname', 'Your fullname', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('phone', 'Number phone', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('email', 'email', 'required|xss_clean|encode_php_tags|vidal_email|callback_check_mail');
            $this->form_validation->set_rules('Password', 'password', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('repassword', 'Repeat password', 'required|xss_clean|encode_php_tags|matches[Password]');
            $this->form_validation->set_rules('companyname', 'Company`s Name', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('phonecompany', 'Company `s Phone', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('Website', 'Website', 'xss_clean|encode_php_tags|prep_url');
            $this->form_validation->set_rules('address', 'Address', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('location', 'Select cities', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('emailcompany', 'Company`s Email', 'required|xss_clean|encode_php_tags|vidal_email');
            
            if($this->form_validation->run() != FALSE){
                $db = array(
                    'fullname'      => $this->input->post('fullname'),
                    'email'         => $this->input->post('email'),
                    'phone'         => $this->input->post('phone'),
                    'pass'          => md5($this->input->post('Password')),
                    'companyname'   => $this->input->post('companyname'),
                    'emailcompany'  => $this->input->post('emailcompany'),
                    'phonecompany'  => $this->input->post('phonecompany'),
                    'website'       => $this->input->post('website'),
                    'location'      => $this->input->post('location'),
                    'companyadd'    => $this->input->post('address'),
                    'status'        => 1,
                    'type'          => 2,
                    'creatdate'     => date("Y-m-d H:m:s"),
                    'ip'            => $this->input->ip_address()
                );
                $re_id = $this->custormer_model->save(null,$db);
                if(isset($re_id)){
                    $data['msg']  = 1;
                    $this->load->view("user/layout",$data);
                }
            }else{
                $this->load->view("user/layout",$data);
            }
        }else {
            $this->load->view("user/layout",$data);
        }

        $this->load->view("user/layout",$data);
    }
    public function regisUser()
    {
        $data['content']        = 'user';
        $data['msg']            = 0;
        $data                   = NULL;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('custormer_model');
        $data['config']         = $this->config_model->get_info(1,array('config_title','config_key','config_des','config_email'));
        $data['title']          = $data['config']['config_title'];
        $data['key']        	= $data['config']['config_key'];
        $data['des']     	 	= $data['config']['config_des'];
        $data['content']        = 'user';
        $data['categorie']      = $this->categorie_model->find_by(array("cago_status"=>1,"LangId"=>$this->Langid),"cago_id,cago_name,cago_rewrite",FALSE,array('key'=>"cago_order",'value'=>"DESC"), NULL,NULL);
        if($this->input->post('postok')==1){
            $this->form_validation->set_rules('user_fullname', 'Your fullname', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_mail', 'Email', 'required|xss_clean|encode_php_tags|vidal_email|callback_check_mail');
            $this->form_validation->set_rules('user_phone', 'Phone number', 'required|xss_clean|encode_php_tags|min_length[6]|max_length[15]');
            $this->form_validation->set_rules('user_pass', 'password', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_repass', 'repeats', 'required|xss_clean|encode_php_tags|matches[user_pass]');
            if($this->form_validation->run() != FALSE){
                $db = array(
                    'fullname'      => $this->input->post('user_fullname'),
                    'email'         => $this->input->post('user_mail'),
                    'phone'         => $this->input->post('user_phone'),
                    'pass'          => md5($this->input->post('user_pass')),
                    'status'        => 1,
                    'type'          => 1,
                    'creatdate'     => date("Y-m-d H:m:s"),
                    'ip'            => $this->input->ip_address()
                );
                $re_id = $this->custormer_model->save(null,$db);
                if(isset($re_id)){
                    $data['msg'] = 1;
                    $this->load->view("user/layout",$data);
                }
            }else{
                $this->load->view("user/layout",$data);
            }

        }else {
            $this->load->view("user/layout",$data);
        }
    }

//    user-8-2-2017
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
        $this->load->view("user/layout",$data);

    }

    public function check_mail($email){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $data       =   $this->custormer_model->find_by(array("email"=>$email),"id",TRUE,NULL, NULL,NULL);
        if(@$data->id > 0){
            $this->form_validation->set_message('user_mail', 'The already exists !');
            return FALSE;
        }else{
            return TRUE;
        }
      
    }
   
}

/* End of file index.php */
/* Location: ./application/modules/home/controllers/index.php */