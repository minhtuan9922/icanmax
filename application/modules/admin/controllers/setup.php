<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		anime
 * @author		Nguyễn Thành �?ạt (ntdat.tb@gmail.com)
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
class Setup extends My_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('setup_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->lang->load('admin','vietnamese');
        if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
            redirect(base_url()."admin/login");
        }
    }
    public function seo(){
        $data['content']                = 'setup/seo';
        $data['title']                  = 'Setup Seo';
        $data['seo_title']              = $this->setup_model->find_by(['key'=>'title'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['seo_description']        = $this->setup_model->find_by(['key'=>'description'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['seo_key']                = $this->setup_model->find_by(['key'=>'key'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['seo_img_share']          = $this->setup_model->find_by(['key'=>'img_share'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);

        $data['seo_email']              = $this->setup_model->find_by(['key'=>'email'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['seo_phone']              = $this->setup_model->find_by(['key'=>'phone'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['seo_address']            = $this->setup_model->find_by(['key'=>'address'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        $data['seo_logo']               = $this->setup_model->find_by(['key'=>'logo'], $select = "value", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
        if(!empty($this->input->post()) && $this->input->post("submit") == ''){
            if($_FILES['img_share']['name'] != ''){
                $img = $this->upload_img($_FILES['img_share'],'uploads/seo/');
            }else{
                $img = $data['seo_img_share']->value;
            }
            if($_FILES['logo']['name'] != ''){
                $logo = $this->upload_img($_FILES['logo'],'uploads/logo/');
            }else{
                $logo = $data['seo_logo']->value;
            }
            $key                        =['value'             => $this->input->post('key')];
            $where_key                  =['key'=>'key','value'=>'key'];
            $desciption                 =['value'             => $this->input->post('description')];
            $where_description          =['key'=>'key','value'=>'description'];
            $title                      =['value'             => $this->input->post('title')];
            $where_title                =['key'=>'key','value'=>'title'];
            $img_share                  =['value'             => $img];
            $where_img_share            =['key'=>'key','value'=>'img_share'];
            $flag_key                   = $this->setup_model->save_key($where_key,$key);
            $flag_des                   = $this->setup_model->save_key($where_description,$desciption);
            $flag_title                 = $this->setup_model->save_key($where_title,$title);
            $flag_img                   = $this->setup_model->save_key($where_img_share,$img_share);

            $email                      =['value'             => $this->input->post('email')];
            $where_email                =['key'=>'key','value'=>'email'];
            $phone                      =['value'             => $this->input->post('phone')];
            $where_phone                =['key'=>'key','value'=>'phone'];
            $address                    =['value'             => $this->input->post('address')];
            $where_address              =['key'=>'key','value'=>'address'];
            $logo                       =['value'             => $logo];
            $where_logo                 =['key'=>'key','value'=>'logo'];

            $flag_email                 = $this->setup_model->save_key($where_email,$email);
            $flag_phone                 = $this->setup_model->save_key($where_phone,$phone);
            $flag_address               = $this->setup_model->save_key($where_address,$address);
            $flag_logo                  = $this->setup_model->save_key($where_logo,$logo);
            echo $this->db->last_query();
            redirect(base_url('admin/setup/seo'));
        }
		$data['seo'] = 'class="active"';
        $this->load->view('layout',$data);
    }
    public function upload_img($file,$forder='uploads/seo/'){
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $file["name"]);
        $extension = end($temp);
        if ((($file["type"] == "image/gif") || ($file["type"] == "image/jpeg") || ($file["type"] == "image/jpg") || ($file["type"] == "image/pjpeg") || ($file["type"] == "image/x-png") || ($file["type"] == "image/png")) && ($file["size"] < 1000000) && in_array($extension, $allowedExts))
        {
            if ($file["error"] > 0)
            {
                echo "Return Code: " . $file["error"] . "<br>";
            }
            else
            {
                date_default_timezone_set("Asia/Bangkok");
                $temp = explode(".", $file["name"]);
                $newfilename = round(microtime(true)) . '.' . end($temp);
                $flag = move_uploaded_file($file["tmp_name"], $forder. $newfilename);
                if($flag == true){
                    $this->load->library('image_lib');
                    $config_manip = array(
                        'image_library' => 'gd2',
                        'source_image'  => $forder. $newfilename,
                        'new_image'     => $forder.'thumb/'. $newfilename,
                        'maintain_ratio'=> TRUE ,
                        'create_thumb'  => TRUE ,
                        'thumb_marker'  => '' ,
                        'width'         => 150,
                        'height'        => 150
                    );
                    $this->image_lib->clear();
                    $this->image_lib->initialize($config_manip);
                    $this->image_lib->resize();
                    return $newfilename;
                }
            }
        }
        else
        {
            echo "Invalid file";
        }
    }
    public function delete_cache(){
        $this->cache->clean();
        redirect(base_url("admin/config/edit/1"));
    }
    public function cache(){
        $data['title'] = 'cache website';
        $data['content'] = 'setup/cache';
		$data['cache'] = 'class="active"';
        $this->load->view('layout',$data);
    }
    public function cache_ajax(){
        $this->load->model('banner_model');
        $this->load->model('setup_model');
        $this->load->model('cago_model');
        $this->load->model('cate_model');
        $this->load->model('post_model');
        $this->load->model('product_model');
        if($this->input->post('type') == 1){
            $banner                     = $this->banner_model->find_by(['status'=>'1'], $select = "title,image,forderimg,link", $is_single_result = FALSE, $order_by = ['key'=>'order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $banner_json                = json_encode($banner);
            $flag_banner                = $this->mkdir_cache('cache-site/banner','banner.json',$banner_json);
            $config                     = $this->setup_model->find_by(NULL, $select = "*", $is_single_result = FALSE, $order_by = Null, $limit = NULL,$offset = NULL);
            $config_ob[]                = new stdClass();
            $i=0;
            foreach($config as $key=>$value){
                $config_ob[$value->key]->$i   = $value->value;
            }
            $config_json                        = json_encode($config_ob);
            $flag_config                        = $this->mkdir_cache('cache-site/config','config.json',$config_json);
            //danh sách menu bài viết
            $cago_top                           = $this->cago_model->find_by(['cate_status'=>'1','cate_top'=>'1','cate_parent'=>0], $select = "cate_id,cate_name,cate_rewrite,", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $cago_footer                        = $this->cago_model->find_by(['cate_status'=>'1','cate_footer'=>'1'], $select = "cate_id,cate_name,cate_rewrite,", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $cago_home                          = $this->cago_model->find_by(['cate_status'=>'1','cate_home'=>'1'], $select = "cate_id,cate_name,cate_rewrite,", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $cago_top_json                      = json_encode($cago_top);
            $cago_footer_json                   = json_encode($cago_footer);
            $cago_home_json                     = json_encode($cago_home);
            $flag_cate_top                      = $this->mkdir_cache('cache-site/list_cate_post','cate_top.json',$cago_top_json);
            $flag_cate_footer                   = $this->mkdir_cache('cache-site/list_cate_post','cate_footer.json',$cago_footer_json);
            $flag_cate_home                     = $this->mkdir_cache('cache-site/list_cate_post','cate_home.json',$cago_home_json);
            //danh sách menu sản phẩm có hiển thị tại top
            $cate_top                           = $this->cate_model->find_by(['cate_status'=>'1','cate_top'=>'1','cate_id_parent'=>0], $select = "*", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $cate_top_json                      = json_encode($cate_top);
            $flag_cate_top                      = $this->mkdir_cache('cache-site/list_cate_product','cate_top.json',$cate_top_json);
            if($cago_top) {
                foreach ($cate_top as $value) {
                    $cate_child = $this->cate_model->find_by(['cate_status' => '1', 'cate_id_parent' => $value->cate_id], $select = "*", $is_single_result = FALSE, $order_by = ['key' => 'cate_order', 'value' => 'DESC'], $limit = NULL, $offset = NULL);
                    $cate_child_json = json_encode($cate_child);
                    $this->mkdir_cache('cache-site/list_cate_product/child-top', $value->cate_id . '.json', $cate_child_json);
                }
            }
            //danh sách menu sản phẩm có hiển thị tại footer
            $cate_footer                        = $this->cate_model->find_by(['cate_status'=>'1','cate_footer'=>'1'], $select = "*", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $cate_footer_json                   = json_encode($cate_footer);
            $flag_cate_footer                   = $this->mkdir_cache('cache-site/list_cate_product','cate_footer.json',$cate_footer_json);
            if($cate_footer) {
                foreach ($cate_footer as $value) {
                    $cate_child = $this->cate_model->find_by(['cate_status' => '1', 'cate_id_parent' => $value->cate_id], $select = "*", $is_single_result = FALSE, $order_by = ['key' => 'cate_order', 'value' => 'DESC'], $limit = NULL, $offset = NULL);
                    $cate_child_json = json_encode($cate_child);
                    $this->mkdir_cache('cache-site/list_cate_product/child-footer', $value->cate_id . '.json', $cate_child_json);
                }
            }
            // danh sách menu sản phẩm có hiển thị tại home
            $cate_home                          = $this->cate_model->find_by(['cate_status'=>'1','cate_home'=>'1'], $select = "*", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            $cate_home_json                     = json_encode($cate_home);
            $flag_cate_home                     = $this->mkdir_cache('cache-site/list_cate_product','cate_home.json',$cate_home_json);
            if($cate_home) {
                foreach ($cate_home as $value) {
                    $cate_child = $this->cate_model->find_by(['cate_status' => '1', 'cate_id_parent' => $value->cate_id], $select = "*", $is_single_result = FALSE, $order_by = ['key' => 'cate_order', 'value' => 'DESC'], $limit = NULL, $offset = NULL);
                    $cate_child_json = json_encode($cate_child);
                    $this->mkdir_cache('cache-site/list_cate_product/child-home', $value->cate_id . '.json', $cate_child_json);
                }
            }
            //danh sách bài viết theo menu theo bảng tbl_cago
            $cago                               = $this->cago_model->find_by(['cate_status'=>'1'], $select = "cate_id,cate_name,cate_rewrite,cate_des,cate_key,cate_images,cate_images_forder", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            if($cago){
                foreach($cago as $item){
                    $cago_json                  = json_encode($item);
                    $this->mkdir_cache('cache-site/cate_post/'.$item->cate_id,'info_cate.json',$cago_json);
                    $post                       = $this->post_model->find_by(['pro_status'=>'1','cate_id_parent'=>$item->cate_id], $select = "pro_id,pro_name,pro_name_rewrite,pro_info,pro_date,pro_img_seo,pro_img_seo_forder", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
                    $post_json                  = json_encode($post);
                    $this->mkdir_cache('cache-site/cate_post/'.$item->cate_id,$item->cate_id.'.json',$post_json);
                }
            }
            //danh sách chi tiết bài viết
            $post_detail                        = $this->post_model->find_by(['pro_status'=>'1'], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
            foreach($post_detail as $item){
                $cate                            = $this->cate_model->find_by(['cate_status'=>'1','cate_id'=>$item->cate_id_parent], $select = "cate_id,cate_name,cate_rewrite,cate_des,cate_key,cate_images,cate_images_forder,cate_id_parent", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
                $cate_json                       = json_encode($cate);
                $this->mkdir_cache('cache-site/post/'.$item->pro_id,'info_cate.json',$cate_json);
                $post_detail_json               = json_encode($item);
                $this->mkdir_cache('cache-site/post/'.$item->pro_id,$item->pro_id.'.json',$post_detail_json);
            }
            // danh sách sản phẩm theo menu tbl_categories.
            $cate                               = $this->cate_model->find_by(['cate_status'=>'1'], $select = "cate_id,cate_name,cate_rewrite,cate_des,cate_key,cate_images,cate_images_forder,cate_id_parent", $is_single_result = FALSE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
            if($cate){
                foreach($cate as $item){
                    $product = NULL;
                    if($item->cate_id_parent == 0){
                        $product                = $this->product_model->find_by(['pro_status'=>'1','cate_id'=>$item->cate_id], $select = "pro_id,pro_name,pro_name_rewrite,pro_info,pro_date,pro_images,pro_folderimg", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
                    }else{
                        $cate_parent            = $this->cate_model->find_by(['cate_status'=>'1','cate_id'=>$item->cate_id_parent], $select = "cate_id,cate_name,cate_rewrite,cate_des,cate_key,cate_images,cate_images_forder,cate_id_parent", $is_single_result = TRUE, $order_by = ['key'=>'cate_order','value'=>'DESC'], $limit = NULL,$offset = NULL);
                        $cate_parent_json       = json_encode($cate_parent);
                        $this->mkdir_cache('cache-site/cate_product/'.$item->cate_id,'parent.json',$cate_parent_json);
                        $product                = $this->product_model->find_by(['pro_status'=>'1','cate_id_parent'=>$item->cate_id], $select = "pro_id,pro_name,pro_name_rewrite,pro_info,pro_date,pro_images,pro_folderimg", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
                    }
                    $cate_json                  = json_encode($item);
                    $this->mkdir_cache('cache-site/cate_product/'.$item->cate_id,'info_cate.json',$cate_json);

                    $product_json               = json_encode($product);
                    $this->mkdir_cache('cache-site/cate_product/'.$item->cate_id,$item->cate_id.'.json',$product_json);
                }
            }
            //danh sách chi tiết sản phẩm.
            $product_detail                = $this->product_model->find_by(['pro_status'=>'1'], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
            foreach($product_detail as $item){
                $cate                            = $this->cate_model->find_by(['cate_status'=>'1','cate_id'=>$item->cate_id_parent], $select = "cate_id,cate_name,cate_rewrite,cate_des,cate_key,cate_images,cate_images_forder,cate_id_parent", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
                if($item->cate_id != 0){
                    $cate_parent                 = $this->cate_model->find_by(['cate_status'=>'1','cate_id'=>$item->cate_id], $select = "cate_id,cate_name,cate_rewrite,cate_des,cate_key,cate_images,cate_images_forder,cate_id_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
                    $cate_parent_json            = json_encode($cate_parent);
                    $this->mkdir_cache('cache-site/product/'.$item->pro_id,'parent_cate.json',$cate_parent_json);
                }
                $cate_json                       = json_encode($cate);
                $this->mkdir_cache('cache-site/product/'.$item->pro_id,'info_cate.json',$cate_json);
                $post_detail_json                = json_encode($item);
                $this->mkdir_cache('cache-site/product/'.$item->pro_id,$item->pro_id.'.json',$post_detail_json);
            }
            die(TRUE);
        }
    }
    public function del_cachefile(){
        if($this->input->post('type') == 1){
            $this->removes_dir('cache-site/banner');
            $this->removes_dir('cache-site/cate_post');
            $this->removes_dir('cache-site/cate_product');
            $this->removes_dir('cache-site/config');
            $this->removes_dir('cache-site/list_cate_post');
            $this->removes_dir('cache-site/list_cate_product');
            $this->removes_dir('cache-site/post');
            $this->removes_dir('cache-site/product');
            die(TRUE);
        }
    }
    //hàm tạo file và folder
    private function mkdir_cache($dir,$file,$json){
        if($dir != '' && $file != '' && $json != '') {
            if (!is_dir($dir)) {
                mkdir($dir);
                $fp = fopen($dir . "/" . $file, "wb");
                fwrite($fp, $json);
                fclose($fp);
                return true;
            } else {
                $fp = fopen($dir . "/" . $file, "wb");
                fwrite($fp, $json);
                fclose($fp);
                return true;
            }
        }
        return false;
    }
    //hàm xóa tất cả file và folder trong 1 đư�?ng dẫn
    public function removes_dir($dir = null) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir") {
                        $this->removes_dir($dir."/". $object);
                        rmdir($dir.'/'.$object);
                    }else{
                        unlink($dir."/".$object);
                    }
                }
            }
            reset($objects);
        }
    }
}