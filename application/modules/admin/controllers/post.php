<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		anime
 * @author		Nguyễn Thành Đạt (ntdat.tb@gmail.com)
 * @copyright   PHP TEAM
 * @since		Version 1.0
 * @phone       0936070409
 *
 */
	class Post extends My_Controller{
		
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
			$this->load->model('post_model');
			$this->load->model('cate_model');
			$this->load->model('cago_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index(){
			$data['title']    		= 'List news';
			$data['modul']    		= 'product';
			$data['content'] 		= 'post/list';
			$data['post'] 			= $this->post_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);;
//			pre($data['post']);
			$data['post_list'] = 'class="active"';
			$this->load->view("layout",$data);
		}
		public function update_info(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->post_model->update($id,$data);
				if(isset($dk))
					echo('1');

			}
		}
		public function update_qty(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$data=array("pro_qty"=>$value);
				$dk = $this->post_model->update($id,$data);

			}
		}

		public function del(){
			$data['title']    = 'List post';
			$id = $this->uri->segment(4);
			$this->post_model->delete($id);
			redirect('/admin/post', 'refresh');
		}
		public function form_pro(){
			if ($this->uri->segment(4))
			{
					$id = $this->uri->segment(4);
			}
			$data['title'] 							= $this->lang->line('add_news');
			$data['content'] 						= "post/add";
			$data['url_post'] 						= "admin/post/add";
			if(isset($id)){
				$data['post'] 						= $this->post_model->find_by(['pro_id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= $this->lang->line('edit_news');
				$data['url_post'] 					= "admin/post/edit/".$id;
				$data['post_index'] = 'class="active"';
			}
			else
			{
				$data['post_add'] = 'class="active"';
			}
            $data['cate'] 							= $this->cago_model->find_by(['cate_status'=>1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$var           							= array();
			if(isset($_POST["submit"])){
				if($_FILES['pro_imgshare']['name'] != ""){
					$imgseo 						= $this->upload_img($_FILES['pro_imgshare']);
				}else{
					$imgseo['filename'] 			= $data['post']->pro_img_seo;
					$imgseo['pro_img_seo_forder'] 	= $data['post']->pro_img_seo_forder;
				}
				$this->form_validation->set_rules('pro_name','post name', 'required|trim|xss_clean');
				$this->form_validation->set_rules('cate_id_parent','Menu', 'required|trim|xss_clean|int');
				$this->form_validation->set_rules('pro_info','post Info', 'required');
				$this->form_validation->set_rules('pro_full','post fulltext', 'required');
				if($this->form_validation->run() != FALSE){
					$cate_parent 	= $this->cago_model->find_by(["cate_id"=>$this->input->post('cate_id_parent')], $select = "cate_id_parent", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$cate_id		= $cate_parent->cate_id_parent;
					$db = array(
						'pro_name'              => fillter($this->input->post('pro_name')),
						'pro_name_rewrite'      => str_replace(' ','-',VietChar($this->input->post('pro_name'))),
                        'cate_id_parent'        => fillter($this->input->post('cate_id_parent')),
                        'cate_id'        		=> $cate_id,
                        'pro_info'              => $this->input->post('pro_info'),
                        'pro_full'              => htmlspecialchars($this->input->post('pro_full')),
                        'pro_key'               => $this->input->post('pro_key'),
                        'pro_des'               => $this->input->post('pro_des'),
						'pro_status'            => $this->input->post('pro_status'),
						'pro_home'            	=> $this->input->post('pro_home'),
						'vip'            		=> $this->input->post('vip'),
						'LangId'           		=> $this->input->post('LangId'),
						'pro_new'            	=> $this->input->post('pro_new'),
						'pro_img_seo'			=> $imgseo['filename'],
						'pro_img_seo_forder'	=> $imgseo['forder'],

					);
					if(isset($id)){
						$db['update']         	= date("Y-m-d H:i:s", time());
						$db['upadte_by']        = $this->session->userdata("session_user_id");
						$id = $this->post_model->save($id,$db);
					}else{
						$db['creatdate']         = date("Y-m-d H:i:s", time());
						$db['creat_by']          = $this->session->userdata("session_user_id");
						$id = $this->post_model->save($id = false,$db);
					}
                    redirect("/admin/post/edit/$id");
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
					if (!file_exists('uploads/posts/'.$forder)) {
						mkdir('uploads/posts/'.$forder, 0777, true);
					}
					$temp = explode(".", $file["name"]);
					$newfilename = round(microtime(true)) . '.' . end($temp);
					$flag = move_uploaded_file($file["tmp_name"], 'uploads/posts/'.$forder.'/'. $newfilename);
					if($flag == true){
						$config_manip = array(
							'image_library' => 'gd2',
							'source_image'  => 'uploads/posts/'.$forder.'/'. $newfilename,
							'new_image'     => 'uploads/posts/thumb/'. $newfilename,
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
							if (!file_exists('uploads/posts/'.$forder)) {
								mkdir('uploads/posts/'.$forder, 0777, true);
							}
							$temp = explode(".", $file["name"][$i]);
							$newfilename = md5(round(microtime(true))).$i. '.' . end($temp);
							$flag = move_uploaded_file($file["tmp_name"][$i], 'uploads/posts/'.$forder.'/'. $newfilename);
							if($flag == true){
								$imgs[$i]		=	$newfilename;
								$forders 		= 	$forder;
								$this->resize('uploads/posts/'.$forder.'/'. $newfilename,'uploads/posts/thumb/'. $newfilename);
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
		public function check_file(){
			if($this->input->post('namefile'))
			{
				$id        = $this->input->post('id_pro');
				$data      = $this->post_model->get_info($id,array('avarta'));
				$var       = array();
				$old_file  = $this->input->post('old_file');
				$type_file = explode('.', $old_file);	
				$name_file = $this->input->post('namefile').'.'.$type_file[1];
				if($old_file != $name_file){
					if(is_file(UPLOAD_DIR.'/post/'.$name_file) == TRUE)
					{
						$var['id']      = $type_file[0];
						$var['warning'] = 'file áº£nh trÃ¹ng tÃªn vui lÃ²ng chá»�n tÃªn khÃ¡c';
						$var['error']   = 1; 
					}else{
						rename(UPLOAD_DIR.'/post/'.$old_file, UPLOAD_DIR.'/post/'.$name_file);
						if($data['avarta'] == $old_file){
							$this->post_model->save($id,array('avarta' => $name_file));
						}
						$var['id']      = $type_file[0];
						$var['warning'] = 'Ä�á»•i tÃªn file thÃ nh cÃ´ng';
						$var['error']   = 0; 
					}
				}
				exit(json_encode($var));
			}
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