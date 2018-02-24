<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		anime
 * @author		Tran Hoang Thien (thienhb12@gmail.com)
 * @copyright   PHP TEAM
 * @link		http://phpandmysql.net
 * @since		Version 1.0
 * @phone       0944418192
 *
 */
	class News extends My_Controller{
		
		public function __construct(){
			parent:: __construct();
			$this->lang->load('admin','vietnamese');
			$this->load->model('news_model');
			$this->load->model('cago_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
            $this->load->helper('date');
		}

		public function index(){
            $data['title']    = 'List  News';
            $data['modul']    = 'news';
            $param            = array();
            $param['select']  = array('*');
            $data['content'] = 'news/list';
            $list_news   = $this->news_model->get_list($param);

            $cago_news   = $this->cago_model->get_list($param);
            $json_news = json_encode($list_news,true);
            $json_cago = json_encode($cago_news,true);
            $dir = 'admin_xs123';
            return_array_creat_file($dir,"news.json",$json_news);
            return_array_creat_file($dir,"cago_news.json",$json_cago);
            $data['news'] = return_array("admin_xs123/news.json");
//			pre($data['news']);
            $dir = 'cache-site/news';
            return_array_creat_file($dir,"news.json",$json_news);
            return_array_creat_file($dir,"cago_news.json",$json_cago);

            $this->load->view("layout",$data);
		}

        public function del(){
            $data['title']    = 'del news';
            $id = $this->uri->segment(4);
            $this->news_model->delete($id);
            redirect('/admin/news', 'refresh');
        }

        public function update_info(){
            if(isset($_POST)){
                $id=$_POST['id'];
                $value=$_POST['val'];
                $type=$_POST['types'];
                $data=array($type=>$value);
                $dk = $this->news_model->update($id,$data);

            }
        }

        public function edit(){
            $data['title']    = 'Edit news';
            $data['modul'] = "news";
            $data['content'] = "news/edit";
            $id = $this->uri->segment(4);
            if(!isset($id) || $id == NULL){
                redirect(base_url()."admin/news");
            }
            $news = return_array("admin_xs123/news.json");
            $data['item'] = return_item_news($id,$news);
            $data['cate'] = return_array("admin_xs123/cago_news.json");

            $datestring = '%Y - %m - %d';
            $time = time();
            if($this->input->post()){
                $reques = $this->input->post();
                $images = $data['item']['news_images'];
                $img = $this->upload($_FILES['news_images']);
                if(isset($img) && $img != 0 ){
                    $images = $img;
                }else{
                    $data['flag']="Lỗi ảnh không upload !";
                    $data['err']=1;
                }
                $title = $this->input->post('news_title',true);
                $re_title = ReturnStringTitle(replace($title));
                $cago = $this->input->post('cate_id_parent',true);
                $news_info = $this->input->post('news_info',true);
                $news_full = $this->input->post('news_full',true);
                $news_key = $this->input->post('news_key',true);
                $news_des = $this->input->post('news_des',true);
                $news_tag = HtmlChars($this->input->post('news_tag',true));
                $aData = array(
                    'news_title' => $title,
                    'news_rewrite' => $re_title,
                    'news_author' => 'admin',
                    'news_info' => $news_info,
                    'news_full' => $news_full,
                    'news_tags' => $news_tag,
                    'news_images' => $images,
                    'news_date' => mdate($datestring, $time),
                    'news_key' => $news_key,
                    'news_des' => $news_des,
                    'cago_id' => $cago,
                );
                $this->news_model->save($id,$aData);
                echo "<script>alert('Cập nhật thành công !');location = '/admin/news';</script>";

            }
            $this->load->view("layout",$data);
        }
        public function add(){
            $data['title']    = 'Add news';
            $data['modul'] = "news";
            $data['content'] = "news/add";
            $data['cate'] = return_array("admin_xs123/cago_news.json");

            $datestring = '%Y - %m - %d';
            $time = time();
            if($this->input->post()){
                $reques = $this->input->post();
                $images = "";
                $img = $this->upload($_FILES['news_images']);
                if(isset($img) && $img != 0 ){
                    $images = $img;
                }else{
                    $data['flag']="Lỗi ảnh không upload !";
                    $data['err']=1;
                }
                $title = $this->input->post('news_title',true);
                $re_title = ReturnStringTitle(replace($title));
                $cago = $this->input->post('cate_id_parent',true);
                $news_info = $this->input->post('news_info',true);
                $news_full = $this->input->post('news_full',true);
                $news_key = $this->input->post('news_key',true);
                $news_des = $this->input->post('news_des',true);
                $news_tag = HtmlChars($this->input->post('news_tag',true));
                $aData = array(
                    'news_title' => $title,
                    'news_rewrite' => $re_title,
                    'news_author' => 'admin',
                    'news_info' => $news_info,
                    'news_full' => $news_full,
                    'news_tags' => $news_tag,
                    'news_images' => $images,
                    'news_date' => mdate($datestring, $time),
                    'news_key' => $news_key,
                    'news_des' => $news_des,
                    'cago_id' => $cago,
                );
                $this->news_model->save($id = false,$aData);
                echo "<script>alert('Thêm thành công !');location = '/admin/news';</script>";

            }
            $this->load->view("layout",$data);
        }

		public function upload($file){
			$output_dir = 'uploads/news/';
            $flag = 0;
			if(isset($file)){
				if(!is_array($file['name'])){
                    $fileName       =   $file["name"];
                    $flag = move_uploaded_file($file["tmp_name"],$output_dir.$fileName);
                    if($flag == 1) {
                        return $fileName;
                    }else{
                        return false;
                    }
				}
			}
		}
	}