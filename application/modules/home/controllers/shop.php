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
class Shop extends MY_Controller {
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
        $this->load->model('custormer_model');
        $this->load->model('cart_model');
        $this->load->model('history_model');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->library("cart");
        $this->load->library('email');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $this->cart->product_name_rules = "^.";

    }

    public function step(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $total_money           = $this->cart->total();
        if($total_money <=0){ redirect(base_url('gio-hang'));}

        $data                   = NULL;
        $data['config']         = $this->config_model->get_info(1,array('config_title','config_key','config_des','config_email'));
        $data['title']          = 'Shopping';
        $data['key']        	= '';
        $data['des']     	 	= '';
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
        $data['recruiter_vip']  = $this->getRecruiter($Langid,array('vip'=>1),$limit = 12);
        $data['total_money']    = $this->cart->total();
        $data['content']        = 'shop/step';
        $data['user']           = $this->custormer_model->find_by(array("id"=>$this->session->userdata('ses_user_id'),"status"=>1),"*",TRUE,NULL, NULL,NULL);
//        pre($data['user']);
        $data['cart']           = $this->cart->contents();
        $data['total_money']           = $this->cart->total();
        if($this->input->post('send_voice') == 1){
            $this->form_validation->set_rules('user_fullname', 'Your fullname', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_mail', 'email', 'required|xss_clean|encode_php_tags|vidal_email|callback_check_mail');
            $this->form_validation->set_rules('user_phone', 'Number phone', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_address', 'Address', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('user_note', 'Yêu cầu', 'xss_clean|encode_php_tags');
            if($this->input->post('check_unh') == 1){
                $this->form_validation->set_rules('cus_fullname', 'Your fullname', 'required|xss_clean|encode_php_tags');
                $this->form_validation->set_rules('cus_mail', 'email', 'required|xss_clean|encode_php_tags|vidal_email|callback_check_mail');
                $this->form_validation->set_rules('cus_phone', 'Number phone', 'required|xss_clean|encode_php_tags');
                $this->form_validation->set_rules('cus_address', 'Address', 'required|xss_clean|encode_php_tags');
            }
            $this->form_validation->set_rules('payments', 'Number phone', 'required|xss_clean|encode_php_tags');
            $this->form_validation->set_rules('ship', 'Number phone', 'required|xss_clean|encode_php_tags');

            if ($this->form_validation->run() != FALSE) {
                $user_info_array        = [
                    'user_fullname'     => $this->input->post('user_fullname'),
                    'user_mail'         => $this->input->post('user_mail'),
                    'user_phone'        => $this->input->post('user_phone'),
                    'user_address'      => $this->input->post('user_address'),
                    'user_note'         => $this->input->post('user_note'),
                ];
                if($this->input->post('check_unh') == 1){
                    $cus_info_array     =[
                        'cus_fullname'     => $this->input->post('cus_fullname'),
                        'cus_mail'         => $this->input->post('cus_mail'),
                        'cus_phone'        => $this->input->post('cus_phone'),
                        'cus_address'      => $this->input->post('cus_address'),
                    ];
                }
                $cart_info  = $this->cart->contents();
                $aData   =  [
                    'datetime'      => date("Y-m-d H:i:s", time()),
                    'pay_method'    => $this->input->post('payments'),
                    'ship_method'   => $this->input->post('ship'),
                    'status'        => 0,
                    'user_info'     => json_encode($user_info_array),
                    'cus_info'      => json_encode($cus_info_array),
                    'invoice'       => json_encode($cart_info),
                    'code'          => time(),
                    'total_money'   => $this->cart->total(),
                ];
                if($this->session->userdata('ses_user_id') != ''){
                    $aData['user_id']   = $this->session->userdata('ses_user_id');
                    $history    = [
                        'title'             => "Bạn có hóa đơn ".time(),
                        'date_history'      => date("Y-m-d H:i:s", time()),
                        'status'            => 0,
                    ];
                    $history['user_id'] = $this->session->userdata('ses_user_id');
                    $id_history = $this->history_model->save($id = FAlSE,$history);
                }
                $id_invoice = $this->cart_model->save($id = FAlSE,$aData);
                if($id_invoice){
                    $this->cart->destroy();
                    $this->session->unset_userdata('total_item');
                    redirect(base_url('gio-hang/success'));
                }
            }

        }

        $this->load->view("shop/layout",$data);
    }
    public function success(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }


        $data                   = NULL;
        $data['config']         = $this->config_model->get_info(1,array('config_title','config_key','config_des','config_email'));
        $data['title']          = 'Shopping';
        $data['key']        	= '';
        $data['des']     	 	= '';
        // menu product.
        $data['cate_pro']       = $this->getCatePro();
        $data['cate_building']       = $this->getCateBuilding($Langid);
        $data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
        $data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);

        $data['pro_hot']        = $this->product_model->find_by(array("pro_status"=>1,"pro_hot"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['pro_new']        = $this->product_model->find_by(array("pro_status"=>1,"pro_new"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);
        $data['pro_vip']        = $this->product_model->find_by(array("pro_status"=>1,"pro_vip"=>1,"LangId"=>$Langid),"*",FALSE,array('key'=>"pro_order",'value'=>"DESC"), 12,NULL);

        $data['content']        = 'shop/success';

        $this->load->view("shop/layout",$data);
    }
    public function listView(){
        $Langid                 = 1;
        if($this->session->userdata('langid') == 2){
            $Langid             = 2;
        }
        $data                   = NULL;
        $data['config']         = $this->config_model->get_info(1,array('config_title','config_key','config_des','config_email'));
        $data['title']          = 'Shopping';
        $data['key']        	= '';
        $data['des']     	 	= '';
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
        $data['recruiter_vip']  = $this->getRecruiter($Langid,array('vip'=>1),$limit = 12);
        $data['cart']           = $this->cart->contents();
        $data['total_money']    = $this->cart->total();
        $cart['total_item']     = $this->cart->total_items();
        $this->session->set_userdata($cart);
        $data['content']        = 'shop/list';

        $this->load->view("shop/layout",$data);
    }
    //shopping a dat
    public function addcart($id,$number){
        $product            = $this->product_model->find_by($where = array("pro_status"=>1,"pro_id"=>$id), $select = "pro_id,pro_price,pro_name,pro_images", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        if(count($product) < 1){
            redirect(base_url());
        }
        $getshop 	        =  $this->cart->contents();
        $data['pro_qty']    = 1;
        if(isset($number) && $number != NULL){
            $qty = $number;
            $data['pro_qty'] = $qty;
        }else{
            foreach($getshop as $item){
                if($item['id'] == $product->pro_id){
                    $data['pro_qty'] = $item['qty']+1;
                }
            }
        }
        $shop = array(
            'id'	    => $product->pro_id,
            'qty'	    => $data['pro_qty'],
            'price'   	=> $product->pro_price,
            'name'      => base64_encode($product->pro_name),
            'serial'    => array('images' => $product->pro_images)
        );
        $this->cart->insert($shop);
        redirect(base_url().'gio-hang','refresh');

    }
    public function updatecart(){
        for ($i = 1; $i <= $this->cart->total_items(); $i++){
            $item = $this->input->post($i);
            $data = array(
                'rowid'    => $item['rowid'],
                'qty'    => $item['qty']
            );
            $this->cart->update($data);
        }
        redirect(base_url().'gio-hang','refresh');
    }
    public function delcart($id){
        $this->del($id);
    }
    public function del($id){
        $getshop = $this->cart->contents();
        foreach($getshop as $item){
            if($item['id'] == $id){
                $data['rowid']=$item['rowid'];
                $data['qty'] = 0;
                $this->cart->update($data);
                break;
            }
        }
        redirect(base_url().'gio-hang','refresh');
    }
    public function emptycart(){
        $this->cart->destroy();
        $this->session->unset_userdata('total_items');
        redirect(base_url().'gio-hang','refresh');
    }
    public function sendMail()
    {

        /*$this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.icanmax.com',
            'smtp_user' => 'admin@icanmax.com',
            'smtp_pass' => 'Longhan1179',
            'smtp_port' => 465,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ));

        $this->email->from('ceo@icanmax.com', 'Your Name');
        $this->email->to('ntdat.tb@gmail.com');
        $this->email->cc(' kinhdoanh@icanmax.com');
        $this->email->bcc('kythuat@icanmax.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        $this->email->send();

        echo $this->email->print_debugger();*/

    }
}