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
class Message extends My_Controller{

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
		$this->load->model('message_model');
		if(!$this->session->userdata("session_user") || $this->session->userdata("session_level") != 1 || $this->session->userdata("session_status") != 1){
			redirect(base_url()."admin/login");
		}
	}

	public function index(){
		$data['title']    			= $this->lang->line('message');
		$data['content'] 			= 'message/list';
		$data['modul']				= 'product';
		$data['contact'] 			= $this->message_model->get();
		$data['num'] 				= $this->message_model->num();
		$data['message'] = 'class="active"';
		$this->load->view("layout",$data);
	}

	public function view($id){
		$data['title'] 							= 'Đọc tin';
		$data['content'] 						= "message/view";
		$data['contact'] 				= $this->message_model->view($id);
		$data['num'] 				= $this->message_model->num();
		$this->load->view("layout",$data);
	}
	public function del($id){
		$data    = $this->message_model->del($id);
		redirect(base_url('admin/message'));
	}
	public function update_info(){
		if(isset($_POST)){
			$id=$_POST['id'];
			$value=$_POST['val'];
			$type=$_POST['types'];
			$data=array($type=>$value);
			$dk = $this->message_model->update($id,$data);
			if(isset($dk))
				echo('1');

		}
	}
	public function update_qty(){
		if(isset($_POST)){
			$id=$_POST['id'];
			$value=$_POST['val'];
			$data=array("cate_order"=>$value);
			$dk = $this->cago_model->update($id,$data);
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