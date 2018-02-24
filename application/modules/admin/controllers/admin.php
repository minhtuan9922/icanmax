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
	class Admin extends My_Controller{
		
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
			$this->load->model('admin_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index(){
			$data['title']    	= 'List administrator';
			$data['modul']    	= 'product';
			$data['content'] 	= "vadmin/list";
			$data['admin'] 		= $this->admin_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['admin_list'] = 'class="active"';
			$this->load->view("layout",$data);
		}
		public function update_info(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->admin_model->update($id,$data);

			}
		}

		public function del($id){
			$data['title']    = 'List admin';
			$this->admin_model->delete($id);
			redirect('/admin/admin', 'refresh');
		}
		public function form(){
			$data['title'] 							= $this->lang->line('add_admin');
			$data['content'] 						= "vadmin/form";
			$data['url_post'] 						= "admin/admin/add";
			if($this->uri->segment(4))
			{
				$id = $this->uri->segment(4);
			}
			//$id = $this->uri->segment(4);
			if(isset($id)){
				$data['admin'] 					= $this->admin_model->find_by(['user_id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= $this->lang->line('edit_admin');
				$data['url_post'] 					= "admin/admin/edit/".$id;
				$data['admin_index'] = 'class="active"';
			}
			else
			{
				$data['admin_add'] = 'class="active"';

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