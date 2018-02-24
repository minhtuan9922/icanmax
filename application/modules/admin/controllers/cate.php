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
	class Cate extends My_Controller{
		
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
			$this->load->model('cate_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index(){
			$data['title']    			= $this->lang->line('list_cate');
			$data['content'] 			= 'cate/list';
			$data['modul']				=	'product';
			$data['cate']				= $this->cate_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['cate_list'] = 'class="active"';

			$this->load->view("layout",$data);
		}

		public function form_cate(){
			if ($this->uri->segment(4))
			{
					$id = $this->uri->segment(4);
			}
			$data['title'] 							= $this->lang->line('add_new');
			$data['content'] 						= "cate/form";
			$data['url_post'] 						= "admin/cate/add";

			if(isset($id)){
				$data['cate'] 						= $this->cate_model->find_by(['cate_id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= 'Sửa danh mục sản phẩm';
				$data['url_post'] 					= "admin/cate/edit/".$id;
				$data['cate_index'] = 'class="active"';
			}
			else
			{
				$data['cate_add'] = 'class="active"';

			}
			$data['category'] 						= $this->cate_model->find_by(['cate_status'=>1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$var           							= array();
			if(isset($_POST["submit"])){
				$this->form_validation->set_rules('cate_name','Cate name', 'required|trim|xss_clean');
				$this->form_validation->set_rules('cate_order','Cate_order', 'required|trim|xss_clean');
				if($this->form_validation->run() != FALSE){
					$db = array(
						'cate_name'             => fillter($this->input->post('cate_name')),
						'cate_rewrite'      	=> str_replace(' ','-',VietChar($this->input->post('cate_name'))),
						'cate_order'            => fillter($this->input->post('cate_order')),
						'cate_id_parent'        => fillter($this->input->post('cate_id_parent')),
						'cate_key'              => $this->input->post('cate_key'),
						'cate_des'              => $this->input->post('cate_des'),
						'cate_home'             => $this->input->post('cate_home'),
						'cate_footer'           => $this->input->post('cate_footer'),
						'cate_top'				=> $this->input->post('cate_top'),
						'cate_status'           => $this->input->post('cate_status'),
						'cate_info'            	=> $this->input->post('cate_info'),
						'cate_full'            	=> $this->input->post('cate_full'),
						'LangId'            	=> $this->input->post('LangId'),
					);
					if(isset($id)){
						$db['update']         	= date("Y-m-d H:i:s", time());
						$db['upadte_by']        = $this->session->userdata("session_user_id");
						$id = $this->cate_model->save($id,$db);
					}else{
						$db['creatdate']         = date("Y-m-d H:i:s", time());
						$db['creat_by']          = $this->session->userdata("session_user_id");
						$id = $this->cate_model->save($id = false,$db);
					}
					redirect("/admin/cate/edit/$id");
				}else{
					$this->load->view("layout",$data);
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function del($id){
			$data    = $this->cate_model->get_info($id,array('cate_id'));
			if(isset($data['cate_id'])){
				$this->cate_model->delete($id);
			}
			redirect(base_url('admin/cate'));
		}
		public function update_info(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->cate_model->update($id,$data);
				if(isset($dk))
					echo('1');

			}
		}
		public function update_qty(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$data=array("cate_order"=>$value);
				$dk = $this->cate_model->update($id,$data);
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
					if (!file_exists('uploads/cate/'.$forder)) {
						mkdir('uploads/cate/'.$forder, 0777, true);
					}
					$temp = explode(".", $file["name"]);
					$newfilename = round(microtime(true)) . '.' . end($temp);
					$flag = move_uploaded_file($file["tmp_name"], 'uploads/cate/'.$forder.'/'. $newfilename);
					if($flag == true){
						$config_manip = array(
							'image_library' => 'gd2',
							'source_image'  => 'uploads/cate/'.$forder.'/'. $newfilename,
							'new_image'     => 'uploads/cate/thumb/'. $newfilename,
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