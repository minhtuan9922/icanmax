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
	class Recruiter extends My_Controller{
		
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
			$this->load->model('recruiter_model');
			$this->load->model('recate_model');

			$this->load->model('position_model');//vị trí
			$this->load->model('career_model');// ngành nghề
			$this->load->model('location_model');// Tỉnh thành phố
			$this->load->model('wage_model');// Lương
			$this->load->model('certificate_model');//Bằng cấp
			$this->load->model('exp_model');//EXP
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
				redirect(base_url()."admin/login");
			}
		}

		public function index(){
			$data['title']    		= $this->lang->line('list_recruit');
			$data['modul']    		= 'product';
			$data['content'] 		= 'recruiter/list';
			$data['recruiter'] 			= $this->recruiter_model->find_by($where = FALSE, $select = "*", $is_single_result = FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);;
//			pre($data['recruiter']);
			$data['recruiter_list'] = 'class="active"';
			$this->load->view("layout",$data);
		}
		public function update_info(){
			if(isset($_POST)){
				$id=$_POST['id'];
				$value=$_POST['val'];
				$type=$_POST['types'];
				$data=array($type=>$value);
				$dk = $this->recruiter_model->update($id,$data);
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
			$this->recruiter_model->delete($id);
			redirect('/admin/recruiter', 'refresh');
		}
		public function form(){
			if($this->uri->segment(4))
			{
				$id = $this->uri->segment(4);
			}
			$data['position'] 		= $this->position_model->find_by(FALSE, $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['career']			= $this->career_model->find_by(FALSE, $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['location']		= $this->location_model->find_by(FALSE, $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['wage']			= $this->wage_model->find_by(FALSE, $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['certificate']	= $this->certificate_model->find_by(FALSE, $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			$data['exp']			= $this->exp_model->find_by(FALSE, $select = "*", FALSE, $order_by = NULL, $limit = NULL,$offset = NULL);
			
			
			
//			pre($data['recruiter']);
			$data['title'] 							= $this->lang->line('add_recruit');
			$data['content'] 						= "recruiter/add";
			$data['url_post'] 						= "admin/recruiter/add";
			if(isset($id)){
				$data['title'] 						= $this->lang->line('edit_recruit');
				$data['url_post'] 					= "admin/recruiter/edit/".$id;
				$data['recruiter_index'] = 'class="active"';
				$data['recruiter']		= $this->recruiter_model->find_by(['pro_id'=>$id], $select = "*", TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
				if($data['recruiter']->pro_id == NULL && !isset($data['recruiter']->pro_id) && isset($id)){
				redirect("/admin/recruiter/");
				}
				$data['re_info']		= $this->recate_model->find_by(['id_recruiter'=>$data['recruiter']->pro_id], $select = "*", TRUE, $order_by = NULL, $limit = NULL,$offset = NULL);
			}
			else
			{
				$data['recruiter_add'] = 'class="active"';

			}
			$var           							= array();
			if($this->input->post("submit") == 'ok'){
				$this->form_validation->set_rules('pro_name','post name', 'required|trim|xss_clean');
				if($this->form_validation->run() != FALSE){
					$db = array(
						'pro_name'              => fillter($this->input->post('pro_name')),
						'pro_name_rewrite'      => str_replace(' ','-',VietChar($this->input->post('pro_name'))),
                        'pro_info'              => $this->input->post('pro_info'),
                        'pro_full'              => htmlspecialchars($this->input->post('pro_full')),
						'pro_status'            => $this->input->post('status'),
						'home'            		=> $this->input->post('home'),
						'vip'            		=> $this->input->post('vip'),
						'LangId'           		=> $this->input->post('LangId'),
						'deadline'           	=> $this->input->post('deadline'),
						'user_name'           	=> $this->input->post('user_name'),
						'email'           		=> $this->input->post('email'),
						'website'           	=> $this->input->post('website'),
						'phone'           		=> $this->input->post('phone'),
						'address'           	=> $this->input->post('address'),
						'intro'           		=> $this->input->post('intro'),
						'benefit'           	=> $this->input->post('benefit'),
						'company_address'       => $this->input->post('company_address'),
						'company_name'          => $this->input->post('company_name'),
						'number'          		=> $this->input->post('number'),
						'hot'            		=> $this->input->post('hot'),
					);
					$adb = [
						'id_position'			=> $this->input->post('position'),
						'id_career'				=> $this->input->post('career'),
						'id_location'			=> $this->input->post('location'),
						'id_wage'				=> $this->input->post('wage'),
						'id_certificate'		=> $this->input->post('certificate'),
						'id_exp'				=> $this->input->post('exp'),
						'status'            	=> $this->input->post('status'),
						'home'            		=> $this->input->post('home'),
						'vip'            		=> $this->input->post('vip'),
						'hot'            		=> $this->input->post('hot'),
						'new'            		=> $this->input->post('new'),
						'LangId'           		=> $this->input->post('LangId'),
					];
					if(isset($id)){
						$db['update']         	= date("Y-m-d H:i:s", time());
						$db['upadte_by']        = $this->session->userdata("session_user_id");
						$id_recruiter 			= $this->recruiter_model->save($id,$db);
						$adb['id_recruiter']	= $id;
						$id 					= $this->recate_model->save($id,$adb);
					}else{
						$db['creatdate']        = date("Y-m-d H:i:s", time());
						$db['creat_by']         = $this->session->userdata("session_user_id");
						$id_recruiter			= $this->recruiter_model->save($id = false,$db);
						$adb['id_recruiter']	= $id_recruiter;
						$id 					= $this->recate_model->save($id = false,$adb);
					}
                    redirect("/admin/recruiter/edit/$id");
				}else{
                    $this->load->view("layout",$data);
                }
			}else{
				$this->load->view("layout",$data);
			}
		}
	}