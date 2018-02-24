<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

	protected $Langid;
	protected $data;
	public function __construct()
	{
		parent:: __construct();
		date_default_timezone_set("asia/ho_chi_minh");
		$this->load->library('session');
		if($this->session->userdata('langid') == 2){
			$this->lang->load('frontend','english');
			$this->Langid = 2;
		}else{
			$this->lang->load('frontend','vietnamese');
			$this->Langid = 1;
		}
		$this->load->model('config_model');
		$this->load->model('location_model');
		$this->load->model('custormer_model');
		$this->load->model('cate_model');
		$this->load->model('cago_model');
		$this->load->model('categorie_model');
		$this->load->model('product_model');
		$this->load->model('post_model');
		$this->load->model('banner_model');
		$this->load->model('profile_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));

		$this->load->helper('date');
		//general
		$this->Langid                 = 1;
		if($this->session->userdata('langid') == 2){
			$this->Langid             = 2;
		}

		// menu product.
		$this->data['cate_pro']       = $this->getCatePro();
		$this->data['cate_building']       = $this->getCateBuilding($this->Langid);
		$this->data['cate_menu']      = $this->cago_model->find_by(array("cate_status"=>1,"LangId"=>$this->Langid,"cate_id_parent"=>0),"*",FALSE,array('key'=>"cate_order",'value'=>"DESC"), NULL,NULL);
		$this->data['banner']         = $this->banner_model->find_by(array("status"=>1),"*",FALSE,array('key'=>"order",'value'=>"DESC"), NULL,NULL);
		//my_string
		$this->load->library('my_string');

		//hoang
		$this->load->model('wage_model');
		$this->data['wage']			= $this->wage_model->list_wage($this->Langid);
		//career
		$this->load->model('career_model');
		$this->data['career']		= $this->career_model->list_career($this->Langid);
		//location
		$this->load->model('location_model');
		$this->data['location']		= $this->location_model->list_location($this->Langid);
		//exp
		$this->load->model('exp_model');
		$this->data['exp']			= $this->exp_model->list_exp($this->Langid);
		//education
		$this->load->model('education_model');
		$this->data['education']	= $this->education_model->list_education($this->Langid);
		//time job
		$this->load->model('time_job_model');
		$this->data['time_job']		= $this->time_job_model->list_time_job($this->Langid);
		//target
		$this->load->model('target_model');
		$this->data['target']		= $this->target_model->list_target($this->Langid);
		//language
		$this->load->model('language_model');
		$this->data['language']		= $this->language_model->list_language($this->Langid);

	}

	public function index()
	{
		
	}
	
	public function profile_online()
	{
		
		//data
		$id_user        = $this->session->userdata('ses_user_id');
		if($id_user == ''){redirect(base_url());}
		$this->data['user']   		= $this->custormer_model->find_by(array("status"=>1,'id'=>$id_user),"*",TRUE,NULL, NULL,NULL);
		//show data
		$this->data['profile']		= $this->profile_model->data_profile($this->session->userdata('ses_user_id'));
		//const
		$this->data['title']        = 'Infomation user';
		$this->data['key']        	= '';
		$this->data['des']     	 	= '';
		//view
		$this->data['content']      = 'user/profile';
		$this->data['active']       = '';
		$this->load->view("user/layout",$this->data);
	}

	public function view_profile($id,$name)
	{
		//detail profile customer
		$this->data['profile']		= $this->profile_model->detail_profile($id);
		// not profile
		if (empty($this->data['profile']->profile_title)) redirect(base_url('user-managerfile'));
		// not for search company or not active profile subtract you 
		if (empty($this->data['profile']->profile_search) || empty($this->data['profile']->profile_satus))
		{
			if ($this->data['profile']->customer_id != $this->session->userdata('ses_user_id'))
			{
				redirect(base_url());
				return;
			}
		}
		//profile other silimar career and location
		$career_profile 	= explode(',',$this->data['profile']->profile_career);
		$location_profile 	= explode(',',$this->data['profile']->profile_location);
		$id_profile			= $this->data['profile']->profile_id;
		$this->data['profile_silimar'] = $this->profile_model->profile_silimar($career_profile,$location_profile,$id_profile);
		$this->data['profile_highlights'] 	= $this->profile_model->profile_highlights();
		// career search
	 	$this->data['search_career']		= $this->career_model->list_career_profile($this->Langid);
	 	// location search
	 	$this->data['search_location']		= $this->location_model->list_location_profile($this->Langid);
		//view
		$this->data['left_view']	= 'view-profile';
		$this->data['title']        = 'View profile';
		$this->data['content']		= 'user/profile/view_profile';
		$this->data['key']        	= '';
		$this->data['des']     	 	= '';
		$this->data['active']       = '';
		//link view profile other
		$this->data['view_other']	= 'user-managerfile/view-profile';
		$this->load->view("user/layout",$this->data);
	}

	public function file_profile()
	{
		//data
		$id_user        = $this->session->userdata('ses_user_id');
		if($id_user == '') { redirect(base_url()); }
		$path_file_late = $this->profile_model->select_file($this->session->userdata('ses_user_id'))->profile_file;
		if (!empty($path_file_late)) 
		{
			$this->session->set_flashdata('file_cv', TRUE);
			redirect(base_url('user-managerfile'));
		} 

		if($this->input->post() && isset($_FILES['file_profile']))
		{
			$this->form_validation->set_rules('file_title','file_title','trim|required|xss_clean|encode_php_tags|max_length[50]');
			if ($this->form_validation->run() != FALSE) 
			{
				$name = $this->my_string->remove_vn_unicode(str_replace(" ","_",$this->session->userdata('ses_user_fullname'))).'_'.rand(10000,99999); 
				$config['upload_path']          = './assets/home/file/cv';
				$config['allowed_types']        = 'pdf';
				$config['max_size']             = 1024*5; //5M
				$config['file_name']            = $name;
				$config['overwrite']            = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file_profile'))
				{
					//upload
					$data_file=$this->upload->data();
					$path = 'assets/home/file/cv/'.$name.$data_file['file_ext'];
					$data = [
								'profile_file_name' 		=> $this->input->post('file_title',TRUE),
								'profile_file'				=> $path,
								'profile_file_date_update'	=> date("Y-m-d H:i:s",now()),
							];
					//remove cv late
					if (!empty($path_file_late))
					{
						unlink($path_file_late);
					}
					$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
					if ($result == TRUE)
					{
						$this->session->set_flashdata('update_file',TRUE);
						redirect(base_url('user-managerfile'));
					}
				} else {
					if (strlen($this->upload->display_errors()) == 64)
					{
						$this->data['error'] = 'Vui lòng chọn file pdf';
					}
					if (strlen($this->upload->display_errors()) == 79)
					{
						$this->data['error'] = 'Kích thước không quá 5M';
					}
				}
			}
		}
		$this->data['title']        = 'File profile';
		//view
		$this->data['content']		= 'user/profile/file_profile';
		$this->data['key']        	= '';
		$this->data['des']     	 	= '';
		$this->data['active']       = '';
		$this->load->view("user/layout",$this->data);
	}

}

/* End of file profile.php */
/* Location: ./application/modules/home/controllers/profile.php */