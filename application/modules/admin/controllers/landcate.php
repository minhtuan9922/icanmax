<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @package		anime
 * @author		Nguyễn Thành Đạt
 * @copyright   PHP TEAM
 * @link		http://ariweb.net
 * @since		Version 1.0
 * @phone       ntdat.tb@gmail.com 093607049
 *
 */
	class Landcate extends My_Controller{
		
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
			$this->load->model('land_model');
			$this->load->model('landcate_model');
			$this->load->model('landconnect_model');
			$this->load->model('landlocation_model');
			$this->load->model('landprice_model');
			$this->load->model('lands_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index(){
			$data['title']    			= $this->lang->line('cate_land');
			$data['content'] 			= 'landcate/list';
			$data['modul']				=	'product';
			$data['cate']				= $this->landcate_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['landcate_list'] = 'class="active"';

			$this->load->view("layout",$data);
		}

		public function form_cate(){
			if($this->uri->segment(4))
			{
				$id = $this->uri->segment(4);
			}
			$data['title'] 							= $this->lang->line('add_land');
			$data['content'] 						= "landcate/form";
			$data['url_post'] 						= "admin/landcate/add";
			if(isset($id)){
				$data['cate'] 						= $this->landcate_model->find_by(['cate_id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= $this->lang->line('edit_land');
				$data['url_post'] 					= "admin/landcate/edit/".$id;

				$data['landcate_index'] = 'class="active"';
			}
			else
			{
				$data['landcate_add'] = 'class="active"';

			}
			$data['category'] 						= $this->landcate_model->find_by(['cate_status'=>1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
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
						'LangId'            	=> $this->input->post('LangId'),
						'cate_icon'            	=> htmlspecialchars($this->input->post('cate_icon')),
					);
					if(isset($id)){
						$db['update']         	= date("Y-m-d H:i:s", time());
						$db['upadte_by']        = $this->session->userdata("session_user_id");
						$id = $this->landcate_model->save($id,$db);
					}else{
						$db['creatdate']         = date("Y-m-d H:i:s", time());
						$db['creat_by']          = $this->session->userdata("session_user_id");
						$id = $this->landcate_model->save($id = false,$db);
					}
					redirect("/admin/landcate/edit/$id");
				}else{
					$this->load->view("layout",$data);
				}
			}else{
				$this->load->view("layout",$data);
			}
		}
		public function del($id){
			$data    = $this->landcate_model->get_info($id,array('cate_id'));
			if(isset($data['cate_id'])){
				$this->landcate_model->delete($id);
			}
			redirect(base_url('admin/landcate'));
		}
		public function update_info(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->landcate_model->update($id,$data);
				if(isset($dk)) echo('1');
			}
		}
		public function update_qty(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$data=array("cate_order"=>$value);
				$dk = $this->landcate_model->update($id,$data);
				if(isset($dk)) echo('1');
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
		// function list area (Danh sách khu vực)
		public function area(){
			$data['title']    			= $this->lang->line('list_area');
			$data['content'] 			= 'landcate/area';
			$data['modul']				=	'product';
			$data['area_vn']		= $this->lands_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['area_eng']		= $this->lands_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['area'] = 'class="active"';

			$this->load->view("layout",$data);		
		}
		//function edit Diện tích (Diện tích = ajax);
		function area_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['area_eng']		= $this->lands_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['area_eng']);
					die($val);
				}else{
					$data['area_vn']		= $this->lands_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['area_vn']);
					die($val);
				}
			}
		}
		function area_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->lands_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function area_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
					);
					$id = $this->lands_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function area_del(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->lands_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		//end diện tích.
		// function list price (Giá)
		public function price(){
			$data['title']    			= $this->lang->line('list_price');
			$data['content'] 			= 'landcate/price';
			$data['modul']				=	'product';
			$data['price_vn']		= $this->landprice_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['price_eng']		= $this->landprice_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['price'] = 'class="active"';

			$this->load->view("layout",$data);		
		}
		//function edit price (Nghề nghiệp = ajax);
		function price_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['price_eng']		= $this->landprice_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['price_eng']);
					die($val);
				}else{
					$data['price_vn']		= $this->landprice_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['price_vn']);
					die($val);
				}
			}
		}
		function price_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->landprice_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function price_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
					);
					$id = $this->landprice_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function price_del(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->landprice_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		// function list location (Tỉnh thành phố)
		public function location(){
			$data['title']    			= $this->lang->line('list_location');
			$data['content'] 			= 'landcate/location';
			$data['modul']				=	'product';
			$data['cate_location_vn']		= $this->landlocation_model->find_by(['LangId' => 1,'parent_id'=>0], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['location_vn'][]	= new stdClass();
			$i=0;
			foreach($data['cate_location_vn'] as $item){
				@$data['location_vn'][$i] -> LangId 	= $item->LangId;
				@$data['location_vn'][$i] -> id 		= $item->id;
				@$data['location_vn'][$i] -> name 		= $item->name;
				@$data['location_vn'][$i] -> child 		= $this->landlocation_model->find_by(['LangId' => 1,'parent_id'=>$item->id], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$i++;
			}
			$data['cate_location_eng']		= $this->landlocation_model->find_by(['LangId' => 2,'parent_id'=>0], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['location_eng'][]	= new stdClass();
			$i=0;
			foreach($data['cate_location_eng'] as $item){
				@$data['location_eng'][$i] -> LangId 	= $item->LangId;
				@$data['location_eng'][$i] -> id 		= $item->id;
				@$data['location_eng'][$i] -> name 		= $item->name;
				@$data['location_eng'][$i] -> child 		= $this->landlocation_model->find_by(['LangId' => 2,'parent_id'=>$item->id], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$i++;
			}

			$data['land_location'] = 'class="active"';

			$this->load->view("layout",$data);		
		}
		//function edit location (Nghề nghiệp = ajax);
		function location_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['location']		= $this->landlocation_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$data['location_parent']	= $this->landlocation_model->find_by(['LangId' => 2,'parent_id'=>0], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data);
					die($val);
				}else{
					$data['location']		= $this->landlocation_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$data['location_parent']	= $this->landlocation_model->find_by(['LangId' => 1,'parent_id'=>0], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data);
					die($val);
				}
			}
		}
		function location_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				$parent_id		= $this->input->post('parent_id');
				if($title != ''){
					$db = array(
						'name'             => $title,
						'parent_id'        => $parent_id,
					);
					$id = $this->landlocation_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function location_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				$parent_id		= $this->input->post('parent_id');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'parent_id'        => $parent_id,
					);
					$id = $this->landlocation_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function location_del(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->landlocation_model->delete($id);
				die(json_encode('1'));
			}
			
		}
	}