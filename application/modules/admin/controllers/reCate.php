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
	class ReCate extends My_Controller{
		
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
			$this->load->model('reCate_model');
			$this->load->model('position_model');
			$this->load->model('career_model');
			$this->load->model('location_model');
			$this->load->model('wage_model');
			$this->load->model('exp_model');
			$this->load->model('certificate_model');
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index(){
			$data['title']    			= 'Recruitment Field';
			$data['content'] 			= 'reCate/list';
			$data['modul']				=	'product';
			$data['cate']				= $this->reCate_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$this->load->view("layout",$data);
		}

		public function form($id){
			$data['title'] 							= 'Add Recruitment Field';
			$data['content'] 						= "reCate/form";
			$data['url_post'] 						= "admin/reCate/add";
			if(isset($id)){
				$data['cate'] 						= $this->cate_model->find_by(['cate_id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				$data['title'] 						= 'Edit Recruitment Field';
				$data['url_post'] 					= "admin/reCate/edit/".$id;
			}
			
			$var           							= array();
			if($this->input->post("submit") == ''){
				$this->form_validation->set_rules('cate_name','Cate name', 'required|trim|xss_clean');
				$this->form_validation->set_rules('cate_order','Cate_order', 'required|trim|xss_clean');
				if($this->form_validation->run() != FALSE){
					$db = array(
						'cate_name'             => fillter($this->input->post('cate_name')),
						'cate_rewrite'      	=> str_replace(' ','-',VietChar($this->input->post('cate_name'))),
						'cate_order'            => fillter($this->input->post('cate_order')),
						'cate_id_parent'        => 0,
						'cate_key'              => $this->input->post('cate_key'),
						'cate_des'              => $this->input->post('cate_des'),
						'cate_home'             => $this->input->post('cate_home'),
						'cate_footer'           => $this->input->post('cate_footer'),
						'cate_top'				=> $this->input->post('cate_top'),
						'cate_status'           => $this->input->post('cate_status'),
						'cate_info'            	=> $this->input->post('cate_info'),
						'cate_full'            	=> $this->input->post('cate_full'),
						'LangId'            	=> $this->input->post('LangId'),
						'cate_images'			=> $imgseo['filename'],
						'cate_images_forder'	=> $imgseo['forder'],
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
					date_default_timezone_set("Asia/Ho_Chi_Minh");
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
		// function list position (Danh sách Chức vụ)
		public function position(){
			$data['title']    			= $this->lang->line('position');
			$data['content'] 			= 'reCate/position';
			$data['modul']				=	'product';
			$data['position_vn']		= $this->position_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['position_eng']		= $this->position_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['position_list'] = 'class="active"';
			$this->load->view("layout",$data);		
		}
		//function edit position (Chức vụ = ajax);
		function position_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['position_eng']		= $this->position_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['position_eng']);
					die($val);
				}else{
					$data['position_vn']		= $this->position_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['position_vn']);
					die($val);
				}
			}
		}
		function position_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->position_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		public function position_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				//echo $title;
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'status'	=> 1,
						'order' 	=> 0,
					);
					$id = $this->position_model->save(false, $db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function position_del(){
			$position_vn					= returnData('database/recruiter/position_vn.json');
			$position_eng					= returnData('database/recruiter/position_eng.json');
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->position_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		//end chức vụ.
		// function list career (Nghề nghiệp)
		public function career(){
			$data['title']    			= $this->lang->line('career');
			$data['content'] 			= 'reCate/career';
			$data['modul']				=	'product';
			$data['career_vn']		= $this->career_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['career_eng']		= $this->career_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['career_list'] = 'class="active"';
			$this->load->view("layout",$data);		
		}
		//function edit career (Nghề nghiệp = ajax);
		function career_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['career_eng']		= $this->career_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['career_eng']);
					die($val);
				}else{
					$data['career_vn']		= $this->career_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['career_vn']);
					die($val);
				}
			}
		}
		function career_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->career_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function career_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'status'	=> 1,
						'order'		=> 0,
					);
					$id = $this->career_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function career_del(){
			$career_vn					= returnData('database/recruiter/career_vn.json');
			$career_eng					= returnData('database/recruiter/career_eng.json');
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->career_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		// function list location (Tỉnh thành phố)
		public function location(){
			$data['title']    			= $this->lang->line('location');
			$data['content'] 			= 'reCate/location';
			$data['modul']				=	'product';
			$data['location_vn']		= $this->location_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['location_eng']		= $this->location_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['location_list'] = 'class="active"';
			$this->load->view("layout",$data);		
		}
		//function edit location (Nghề nghiệp = ajax);
		function location_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['location_eng']		= $this->location_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['location_eng']);
					die($val);
				}else{
					$data['location_vn']		= $this->location_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['location_vn']);
					die($val);
				}
			}
		}
		function location_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->location_model->save($id,$db);
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
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'status'	=> 1,
						'order'		=> 0,
					);
					$id = $this->location_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function location_del(){
			$location_vn					= returnData('database/recruiter/location_vn.json');
			$location_eng					= returnData('database/recruiter/location_eng.json');
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->location_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		// function list wage (Mức lương)
		public function wage(){
			$data['title']    			= $this->lang->line('wage');
			$data['content'] 			= 'reCate/wage';
			$data['modul']				=	'product';
			$data['wage_vn']		= $this->wage_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['wage_eng']		= $this->wage_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);

			$data['wage_list'] = 'class="active"';
			$this->load->view("layout",$data);		
		}
		//function edit wage (Nghề nghiệp = ajax);
		function wage_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['wage_eng']		= $this->wage_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['wage_eng']);
					die($val);
				}else{
					$data['wage_vn']		= $this->wage_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['wage_vn']);
					die($val);
				}
			}
		}
		function wage_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->wage_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function wage_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'status'	=> 1,
						'order'		=> 0,
					);
					$id = $this->wage_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function wage_del(){
			$wage_vn					= returnData('database/recruiter/wage_vn.json');
			$wage_eng					= returnData('database/recruiter/wage_eng.json');
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->wage_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		// function list certificate (Bằng cấp chứng chỉ)
		public function certificate(){
			$data['title']    			= $this->lang->line('certificate');
			$data['content'] 			= 'reCate/certificate';
			$data['modul']				=	'product';
			$data['certificate_vn']		= $this->certificate_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['certificate_eng']		= $this->certificate_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['certificate_list'] = 'class="active"';
			$this->load->view("layout",$data);		
		}
		//function edit certificate (Nghề nghiệp = ajax);
		function certificate_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['certificate_eng']		= $this->certificate_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['certificate_eng']);
					die($val);
				}else{
					$data['certificate_vn']		= $this->certificate_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['certificate_vn']);
					die($val);
				}
			}
		}
		function certificate_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->certificate_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function certificate_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'status'	=> 1,
						'order'		=> 0,
					);
					$id = $this->certificate_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function certificate_del(){
			$certificate_vn					= returnData('database/recruiter/certificate_vn.json');
			$certificate_eng					= returnData('database/recruiter/certificate_eng.json');
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->certificate_model->delete($id);
				die(json_encode('1'));
			}
			
		}
		// function list exp (Năm kinh nghiệm)
		public function exp(){
			$data['title']    			= $this->lang->line('exp');
			$data['content'] 			= 'reCate/exp';
			$data['modul']				=	'product';
			$data['exp_vn']		= $this->exp_model->find_by(['LangId' => 1], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['exp_eng']		= $this->exp_model->find_by(['LangId' => 2], $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['exp_list'] = 'class="active"';
			$this->load->view("layout",$data);		
		}
		//function edit exp (Nghề nghiệp = ajax);
		function exp_edit(){
			if($this->input->post()){

				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				if($lang == 2){
					$data['exp_eng']		= $this->exp_model->find_by(['LangId' => 2,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['exp_eng']);
					die($val);
				}else{
					$data['exp_vn']		= $this->exp_model->find_by(['LangId' => 1,'id'=>$id], $select = "*", $is_single_result = TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
					$val 		= json_encode($data['exp_vn']);
					die($val);
				}
			}
		}
		function exp_update(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'             => $title,
					);
					$id = $this->exp_model->save($id,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function exp_add(){
			if($this->input->post()){
				$lang 			= $this->input->post('lang');
				$title 			= $this->input->post('title');
				if($title != ''){
					$db = array(
						'name'      => $title,
						'LangId'	=> $lang,
						'status'	=> 1,
						'order'		=> 0,
					);
					$id = $this->exp_model->save(false,$db);
					die(json_encode('1'));
				}else{
					die(json_encode('0'));
				}
			}
		}
		function exp_del(){
			if($this->input->post()){
				$id 			= $this->input->post('id');
				$this->exp_model->delete($id);
				die(json_encode('1'));
			}
			
		}
	}