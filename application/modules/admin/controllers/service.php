<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @package		Adminpro
 * @author		Tran Hoang Thien (thienhb12@gmail.com)
 * @copyright   PHP TEAM
 * @link		http://phpandmysql.net
 * @since		Version 1.0
 * @phone       0944418192
 *
 */
class Service extends MY_Controller {

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
		$this->load->model('config_model');
	}

	public function index()
	{
		$data['title'] = $this->lang->line('title_service');
		$data['content'] = 'service/edit_service';
		$data['service'] = 'class="active"';
		// Lấy nội dung file txt
		$data['service_vn'] = file_get_contents(base_url('filetxt/dichvu.txt'));
		$data['service_us'] = file_get_contents(base_url('filetxt/service.txt'));

		$this->load->view('layout', $data);
	}
	public function upload()
	{
		/*******************************************************
		* Only these origins will be allowed to upload images *
		******************************************************/
		$accepted_origins = array("http://localhost", "http://192.168.1.1", "http://dsiviet.com.vn");

		/*********************************************
		* Change this line to set the upload folder *
		*********************************************/
		$imageFolder = "uploads/service/";

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
			file_put_contents('./filetxt/dichvu.txt', $content_vn);
			file_put_contents('./filetxt/service.txt', $content_us);
			redirect(base_url('admin/service'));
		//}			
	}
}