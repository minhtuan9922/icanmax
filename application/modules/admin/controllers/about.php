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
	class About extends My_Controller{
		
		public function __construct(){
			parent:: __construct();
			$this->load->model('about_model');
			$this->load->library('form_validation');
			$this->load->helper('url');
			GLOBAL $Langid;
			$this->load->library('session');
			if($this->session->userdata('langid') == 2){
				$this->lang->load('admin','english');   
				$Langid = 2;
			}else{
				$this->lang->load('admin','vietnamese');
				$Langid = 1;
			}
			if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1){
				redirect(base_url()."admin/login");
			}
		}
		public function index()
		{
			$data['title'] = $this->lang->line('title_about');
			$data['content'] = 'about/edit_about';
			$data['about'] = 'class="active"';
			// Lấy nội dung file txt
			$data['about_vn'] = file_get_contents(base_url('filetxt/gioithieu.txt'));
			$data['about_us'] = file_get_contents(base_url('filetxt/introduction.txt'));

			$this->load->view('layout', $data);
		}
		public function upload()
		{
			/*******************************************************
			* Only these origins will be allowed to upload images *
			******************************************************/
			$accepted_origins = array("http://localhost", "http://192.168.1.103", "http://dsiviet.com.vn");

			/*********************************************
			* Change this line to set the upload folder *
			*********************************************/
			$imageFolder = "uploads/about/";

			reset ($_FILES);
			$temp = current($_FILES);
			if (is_uploaded_file($temp['tmp_name'])){
				if (isset($_SERVER['HTTP_ORIGIN'])) {
					// same-origin requests won't set an origin. If the origin is set, it must be valid.
					if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
						header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
					} else {
						header("HTTP/1.0 403 Origin Denied");
						return;
					}
				}

				/*
				If your script needs to receive cookies, set images_upload_credentials : true in
				the configuration and enable the following two headers.
				*/
				// header('Access-Control-Allow-Credentials: true');
				// header('P3P: CP="There is no P3P policy."');

				// Sanitize input
				if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
					header("HTTP/1.0 500 Invalid file name.");
					return;
				}

					// Verify extension
				if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
					header("HTTP/1.0 500 Invalid extension.");
					return;
				}

				// Accept upload if there was no origin, or if it is an accepted origin
				$filetowrite = $imageFolder . $temp['name'];
				move_uploaded_file($temp['tmp_name'], $filetowrite);

				// Respond to the successful upload with JSON.
				// Use a location key to specify the path to the saved image resource.
				// { location : '/your/uploaded/image/file'}
				echo json_encode(array('location' => $filetowrite));
			} else {
				// Notify editor that the upload failed
				header("HTTP/1.0 500 Server Error");
			}
		}
		public function save()
		{
			//if(isset($_POST['save']))
			//{
				$content_vn = $this->input->post('content_vn');
				$content_us = $this->input->post('content_us');
				file_put_contents('./filetxt/gioithieu.txt', $content_vn);
				file_put_contents('./filetxt/introduction.txt', $content_us);
				redirect(base_url('admin/about'));
			//}			
		}
		public function edit(){
			$data['title']    = "about management";
			$data['color']    = "#33925c";
			$data['template'] = 'about/edit_about';
			$var              = array();
			$id               = $this->uri->segment(4);
			$request          = $this->input->post();
			if(isset($id)){
				if(!empty($request)){
					$id = $this->uri->segment(4);
					$this->form_validation->set_rules('about_us',' about', 'required|trim|xss_clean');
					$this->form_validation->set_rules('contact_us',' contact', 'required|trim|xss_clean');
					if($this->form_validation->run() == FALSE){
						$data['title']    = "Sửa thông tin cấu hình trang";
						$data['color']    = "#33925c";
						$data['template'] = 'about/edit_about';
						$param            = array('id','about_us','contact_us');
						$data['result']   = $this->about_model ->get_info($id,$param);
						$this->load->view('layout',$data);
					}else{
						$about   = $this->input->post('about_us');
						$contact = $this->input->post('contact_us');
						$db = array(
							'about_us'   => $about,
							'contact_us' => $contact
						);
						$this->about_model ->save($id,$db);
						redirect(base_url("admin/about/edit/1"));
					}
				}else{
					if(!empty($id)){
						$param          = array('id','about_us','contact_us');
						$data['result'] = $this->about_model ->get_info($id,$param);
						$this->load->view('layout',$data);
					}
				}
			}else{
				redirect(base_url("admin/about/edit/1"));
			}
		}
	}