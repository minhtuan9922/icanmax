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
	class Banner extends My_Controller{
		
		public function __construct(){
			parent:: __construct();
			GLOBAL $Langid;
			$this->load->library('session');
			if($this->session->userdata('langid') == 2){
				$this->lang->load('admin','english');   
				$Langid = 2;
			}else{
				$this->lang->load('admin','vietnamese');
				$Langid = 1;
			}
			$this->load->model('banner_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}
		public function index(){
			$data['title']    		= 'List Banner';
			$data['modul']    		= 'product';
			$param            		= array();
			$param['select']  		= array('*');
			$data['content'] 		= 'banner/list';
			$data['banner']			= $this->banner_model->find_by(NULL, $select = "*", $is_single_result = FALSE, $order_by = ['key'=>'id','value'=>'DESC'], $limit = NULL,$offset = NULL);
			/*pre($data['banner']);*/
			$data['banner_list'] = 'class="active"';

			$this->load->view("layout",$data);
		}
		public function update_info(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->banner_model->update($id,$data);
				if(isset($dk)) echo('1');
			}
		}
		public function update_qty(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$data=array("order"=>$value);
				$dk = $this->banner_model->update($id,$data);
				if(isset($dk)) echo('1');
			}
		}

		public function del(){
			$data['title']    = 'List post';
			$id = $this->uri->segment(4);
			$this->banner_model->delete($id);
			redirect('/admin/post', 'refresh');
		}
		public function form_pro() {
			if($this->uri->segment(4))
			{
				$id = $this->uri->segment(4);
			}
			$data['title'] 							= $this->lang->line('add_banner');
			$data['content'] 						= "banner/add";
			$data['url_banner'] 						= "admin/banner/add";
			if(isset($id)){
				$data['banner'] 					= $this->banner_model->find_by(['id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= $this->lang->line('edit_banner');
				$data['url_banner'] 					= "admin/banner/edit/".$id;
				$data['banner_index'] = 'class="active"';
			}
			else
			{
				$data['banner_add'] = 'class="active"';
			}

			$var           							= array();
			if(isset($_POST["submit"])){
				if($_FILES['image']['name'] != ""){
					$imgseo 						= $this->upload_img($_FILES['image']);
				}else{
					$imgseo['filename'] 			= $data['banner']->image;
					$imgseo['forder'] 	= $data['banner']->forderimg;
				}
				$this->form_validation->set_rules('title','post title', 'required|trim|xss_clean');
				if($this->form_validation->run() != FALSE){
					$db = array(
						'title'             => fillter($this->input->post('title')),
						'link'              => $this->input->post('link'),
						'status'            => $this->input->post('status'),
						'image'				=> $imgseo['filename'],
						'forderimg'			=> $imgseo['forder'],

					);
					if(isset($id)){
						$db['update']         	= date("Y-m-d H:i:s", time());
						$db['update_by']        = $this->session->userdata("session_user_id");
						$id = $this->banner_model->save($id,$db);
					}else{
						$db['creatdate']         = date("Y-m-d H:i:s", time());
						$db['creat_by']          = $this->session->userdata("session_user_id");
						$id = $this->banner_model->save($id = false,$db);
					}
					redirect("/admin/banner/edit/$id");
				}else{
					$this->load->view("layout",$data);
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function upload_img($file){
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
					$forder             = date("dmYHis", time());
					if (!file_exists('uploads/banner/'.$forder)) {
						mkdir('uploads/banner/'.$forder, 0777, true);
					}
					$temp = explode(".", $file["name"]);
					$newfilename = round(microtime(true)) . '.' . end($temp);
					$flag = move_uploaded_file($file["tmp_name"], 'uploads/banner/'.$forder.'/'. $newfilename);
					if($flag == true){
						$config_manip = array(
							'image_library' => 'gd2',
							'source_image'  => 'uploads/banner/'.$forder.'/'. $newfilename,
							'new_image'     => 'uploads/banner/thumb/'. $newfilename,
							'maintain_ratio'=> TRUE ,
							'create_thumb'  => TRUE ,
							'thumb_marker'  => '' ,
							'width'         => 150,
							'height'        => 150
						);

						$this->load->library('image_lib', $config_manip);
						$this->image_lib->resize();
						return ['forder'=>$forder,'filename'=>$newfilename];
					}
				}
			}
			else
			{
				echo "Invalid file";
			}
		}
	}