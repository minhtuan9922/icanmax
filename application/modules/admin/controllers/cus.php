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
	class Cus extends My_Controller{
		
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
			$this->load->model('custormer_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index($type){
			$data['title']    	= 'List custormer';
			$data['modul']    	= 'product';
			$data['content'] 	= "cus/list";
			$data['admin'] 		= $this->custormer_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$this->load->view("layout",$data);
		}
		//người tìm việc (candidate)
		public function candidate(){
			$data['title']    	= $this->lang->line('list_candidate');
			$data['link']		= 'admin/cus/2';
			$data['modul']    	= 'product';
			$data['content'] 	= "cus/customer";
			$data['admin'] 		= $this->custormer_model->find_by(['type' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['candidate'] = 'class="active"';
			$this->load->view("layout",$data);
		}		
		public function info(){
			if($this->input->post())
			{
				$id = $this->input->post('id');
				$dat = $this->custormer_model->find_by(['id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				die(json_encode($dat));
			}
		}
		public function update_info(){
			if(isset($_POST)){
				$id = $_POST['id'];
				$status = $_POST['status'];
				//$type=$_POST['types'];
				$data=array('status' => $status);
				$dk = $this->custormer_model->update($id,$data);
				if($dk == FALSE)
				{
					echo '0';
				}
				else
					echo '1';

			}
		}
		function del_candidate(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$kq = $this->custormer_model->delete($id);
				if($kq == FALSE)
					die(json_encode('0'));
				else 
					die(json_encode('1'));
			}
			
		}
		
		//nhà tuyển dụng (recruiter)
		public function recruiter(){
			$data['title']    	= $this->lang->line('list_recruiter');
			$data['link']		= 'admin/cus/2';
			$data['modul']    	= 'product';
			$data['content'] 	= "cus/customer";
			$data['admin'] 		= $this->custormer_model->find_by($where = ['type'=>1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['recruiter_c'] = 'class="active"';

			$this->load->view("layout",$data);
		}
		public function custormer(){
			$data['title']    	= 'List custormer';
			$data['modul']    	= 'product';
			$data['content'] 	= "cus/custorm";
			$data['admin'] 		= $this->custormer_model->find_by($where = ['type'=>3], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['custormer'] = 'class="active"';

			$this->load->view("layout",$data);
		}
		public function shop(){
			$data['title']    	= 'List shop';
			$data['modul']    	= 'product';
			$data['content'] 	= "cus/shop";
			$data['admin'] 		= $this->custormer_model->find_by($where = ['type'=>4], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['shop'] = 'class="active"';

			$this->load->view("layout",$data);
		}

		public function update_info1(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				//$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->custormer_model->update($id,$data);

			}
		}

		public function del($id){
			$data['title']    = 'List admin';
			$this->admin_model->delete($id);
			redirect('/admin/admin', 'refresh');
		}
		public function form($id){
			$data['title'] 							= 'Thêm mới admin';
			$data['content'] 						= "vadmin/form";
			$data['url_post'] 						= "admin/admin/add";
			if(isset($id)){
				$data['admin'] 					= $this->admin_model->find_by(['user_id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= 'Sửa thông tin admin';
				$data['url_post'] 					= "admin/admin/edit/".$id;
			}
			if($this->input->post("submit") == 1){
				$this->form_validation->set_rules('user_name','User name', 'required|trim|xss_clean');
				$this->form_validation->set_rules('user_fullname','Full name', 'required|trim|xss_clean');
				if($this->input->post('user_password') != ''){
					$this->form_validation->set_rules('user_password','User password', 'trim|xss_clean|min_length[6]');
				}
				$this->form_validation->set_rules('user_phone','Phone number', 'trim|xss_clean');

				if($this->form_validation->run() != FALSE){
					if($this->input->post('user_password') != ''){
						$pass = md5($this->input->post('user_password'));
					}else{
						$pass = md5($data['admin']->user_password);
					}
					$db = array(
						'user_name'				=> $this->input->post('user_name'),
						'user_password'			=> $pass,
						'user_fullname'			=> $this->input->post('user_fullname'),
						'user_phone'			=> $this->input->post('user_phone'),
						'user_status'			=> $this->input->post('user_status'),
					);
					if(isset($id)){
						$db['update']         	= date("Y-m-d H:i:s", time());
						$db['update_by']        = $this->session->userdata("session_user_id");
						$id = $this->admin_model->save($id,$db);
					}else{
						$db['creatdate']         = date("Y-m-d H:i:s", time());
						$db['creat_by']          = $this->session->userdata("session_user_id");
						$id = $this->admin_model->save($id = false,$db);
					}
                    redirect("/admin/admin/edit/$id");
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
					if (!file_exists('uploads/products/'.$forder)) {
						mkdir('uploads/products/'.$forder, 0777, true);
					}
					$temp = explode(".", $file["name"]);
					$newfilename = round(microtime(true)) . '.' . end($temp);
					$flag = move_uploaded_file($file["tmp_name"], 'uploads/products/'.$forder.'/'. $newfilename);
					if($flag == true){
						$config_manip = array(
							'image_library' => 'gd2',
							'source_image'  => 'uploads/products/'.$forder.'/'. $newfilename,
							'new_image'     => 'uploads/products/thumb/'. $newfilename,
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

		public function upload_multiple_img($file){
			$allowedExts 		= array("gif", "jpeg", "jpg", "png");
			if($file['name'][0] != ""):
				$count 			= count($file['name']);
				$imgs			= NULL;
				$forders			= "";
				for($i=0;$i<$count;$i++):
					$temp[$i] 				= explode(".", $file["name"][$i]);
					$extension[$i] 			= end($temp);

					if ((($file["type"][$i] == "image/gif") || ($file["type"][$i] == "image/jpeg") || ($file["type"][$i] == "image/jpg") || ($file["type"][$i] == "image/pjpeg") || ($file["type"][$i] == "image/x-png") || ($file["type"][$i] == "image/png")) && ($file["size"][$i] < 100000000))
					{
						if ($file["error"][$i] > 0)
						{
							echo "Return Code: " . $file["error"][$i] . "<br>";
						}
						else
						{
							date_default_timezone_set("Asia/Bangkok");
							$forder             = date("dmYHis", time());
							if (!file_exists('uploads/products/'.$forder)) {
								mkdir('uploads/products/'.$forder, 0777, true);
							}
							$temp = explode(".", $file["name"][$i]);
							$newfilename = md5(round(microtime(true))).$i. '.' . end($temp);
							$flag = move_uploaded_file($file["tmp_name"][$i], 'uploads/products/'.$forder.'/'. $newfilename);
							if($flag == true){
								$imgs[$i]		=	$newfilename;
								$forders 		= 	$forder;
								$this->resize('uploads/products/'.$forder.'/'. $newfilename,'uploads/products/thumb/'. $newfilename);
							}
						}
					}
					else
					{
						echo "Invalid file";
					}
				endfor;
				$data['img'] = serialize($imgs);
				$data['forder'] = $forders;
				return $data;
			else:
				return false;
			endif;
		}
		public function resize($old, $new)
		{
			$this->load->library('image_lib');
			$config = array(
				'image_library' => 'gd2',
				'source_image'  => $old,
				'new_image'     => $new,
				'maintain_ratio'=> TRUE ,
				'create_thumb'  => TRUE ,
				'thumb_marker'  => '' ,
				'width'         => 150,
				'height'        => 150
			);
			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
		}
	}