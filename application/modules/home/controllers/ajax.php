<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	protected $Langid;
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("asia/ho_chi_minh");
		$this->load->library('session');
		if($this->session->userdata('langid') == 2){
			$this->lang->load('frontend','english');
			$this->Langid = 2;
		}else{
			$this->lang->load('frontend','vietnamese');
			$this->Langid = 1;
		}
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
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
		//my string
		$this->load->library('my_string');
		$this->load->helper('security');
		$this->load->helper('date');
	}
	public function index()
	{
		
	}

	public function update_img_user()
	{
		if (!empty($_FILES['file_img']))
		{
			//get id customer
			$id=$this->session->userdata('ses_user_id');
			$config['upload_path']          = './assets/home/image/user';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 1024;
			$config['file_name']            = $id;
			$config['overwrite']            = TRUE;
			//libary
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$successful = $this->upload->do_upload('file_img');
			if (!$successful)
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data=$this->upload->data();
				$path='assets/home/image/user/'.$data['file_name'];
				$data= [ 'img' => $path];	
				$update_img=$this->custormer_model->update_rule(['id' => $id],$data);
				if ($update_img==true)
				{
					$this->session->set_userdata('ses_user_img',$path);
					echo 'Thành công';
				} else {
					echo 'Thất bại';
				}
			}
		}
		else {
			echo 'not find image';
		}
	}

	/**
	 * [update_profile_general update info general ]
	 * @return [json] [description]
	 */
	public function update_profile_general()
	{
		if ($this->input->post())
		{
			$validator = [];
			if ($this->input->post('count',TRUE) > 3 || empty($this->input->post('count',TRUE)))
			{
				$validator['max_count']	= TRUE;
				echo json_encode($validator);	
				return;
			}
			//validation
			$this->form_validation->set_rules('profile_title', 'profile title','trim|required|xss_clean|encode_php_tags|max_length[50]');
			$this->form_validation->set_rules('profile_education', 'profile education', 'trim|is_natural_no_zero|required|xss_clean');
			$this->form_validation->set_rules('profile_career[]', 'profile career','required|xss_clean|encode_php_tags|is_natural_no_zero|callback_select_career');
			$this->form_validation->set_rules('profile_exp', 'profile_exp','trim|is_natural_no_zero|required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('profile_time_job[]', 'profile time job','required|is_natural_no_zero|xss_clean|encode_php_tags|callback_select_time_job');
			$this->form_validation->set_rules('profile_wage', 'profile_wage','trim|is_natural_no_zero|required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('profile_location[]', 'profile_location','required|is_natural_no_zero|xss_clean|encode_php_tags|callback_select_location');
			$this->form_validation->set_error_delimiters('<div name="error" class="alert alert-danger alert-dismissible" style="margin-bottom:0px;">','</div>');
			if ($this->form_validation->run() != FALSE) {

				//update profile general
				$data = [
					'profile_title'				=> $this->my_string->remove_html_php($this->input->post('profile_title',TRUE)),
					'profile_leve_learning'		=> $this->input->post('profile_education',TRUE),
					'profile_time_job'			=> implode(",",$this->input->post('profile_time_job',TRUE)),
					'profile_career'			=> implode(",",$this->input->post('profile_career',TRUE)),
					'profile_exe'				=> $this->input->post('profile_exp',TRUE),
					'profile_money'				=> $this->input->post('profile_wage',TRUE),
					'profile_date_update'		=> date("Y-m-d H:i:s",now()),
					'profile_location'			=> implode(",",$this->input->post('profile_location',TRUE))
				];
				$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
				if ($result == 1)
				{
					$validator['successful'] = TRUE;
				} else {
					$validator['successful'] = FALSE;
				}
				echo json_encode($validator);
				
			}
			else {
				//validator  error
				$validator['successful'] = FALSE;
				//show error validator
				foreach ($_POST as $key => $value) 
				{
					if ($key == 'profile_career' || $key == 'profile_time_job' || $key == 'profile_location')
					{
						$validator['messages'][$key] = form_error($key.'[]');
					} 
					else 
					{
						$validator['messages'][$key] = form_error($key);
					}
            	}
            	echo json_encode($validator);		
			}	
		}
	}

	public function select_career($arr)
	{
		$n		=count($this->input->post('profile_career',TRUE));
		if ($n > 3)
		{
			 $this->form_validation->set_message('select_career', " career can not select than 3 ");
			 return false;
		} else {
			return true;
		}
	}

	public function select_time_job($arr)
	{
		$n		=count($this->input->post('profile_time_job',TRUE));
		if ($n > 2)
		{
			 $this->form_validation->set_message('select_time_job', " time job can not select than 2 ");
			 return false;
		} else {
			return true;
		}
	}

	public function select_location($arr)
	{
		$n		=count($this->input->post('profile_location',TRUE));
		if ($n > 5)
		{
			 $this->form_validation->set_message('select_career', " location can not select than 5 ");
			 return false;
		} else {
			return true;
		}
	}
	// end profile general
	/**
	 * [update_target_career ]
	 * @return [type] [description]
	 */
	public function update_target_career()
	{
		if ($this->input->post())
		{
			$validator	= [];
			if ($this->input->post('count',TRUE) > 3 || empty($this->input->post('count',TRUE)))
			{
				$validator['max_count']	= TRUE;
				echo json_encode($validator);	
				return;
			}
			$checkbox 	= $this->input->post('checkbox',TRUE);
			$txt_target = $this->my_string->conver_htmlentities($this->input->post('txt_target',TRUE));

			if ($txt_target != '')
			{
				if (strlen($txt_target) < 50)
				{
					$validator['min_length'] = "FALSE"; 
					return;
				}
			}
			if (count($checkbox) == 0 && $txt_target == '')
			{
				$validator['successful'] = "FALSE"; 
				return;
			} else 
			{
				$profile_target = '';
				if ($checkbox == false)
				{
					$profile_target = $txt_target;
				}
				else
				{
					$profile_target = implode('%^&*',$checkbox)."%^&*".$txt_target;
				}
				//update
				$data = [
						'profile_target'	=> $profile_target
				];
				$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
				if ($result == 1)
				{
					$validator['successful'] = TRUE;
				} else {
					$validator['successful'] = FALSE;
				}
				echo json_encode($validator);
			}
		} 
	}
	/**
	 * [update_education ]
	 * use json update education
	 * @return [json] [description]
	 */
	public function update_education()
	{
		if ($this->input->post())
		{
			$infomation = [];
			//validation
			$this->form_validation->set_rules('education_schools', 'education schools','trim|required|xss_clean|encode_php_tags|max_length[100]');
			$this->form_validation->set_rules('education_specialized', 'education specialized','trim|required|xss_clean|encode_php_tags|max_length[100]');
			$this->form_validation->set_rules('education_rank', 'education rank','trim|required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('education_time_start', 'education time start','trim|required|xss_clean|encode_php_tags|callback_is_future_date|callback_is_vaild_date');
			$this->form_validation->set_rules('education_time_end', 'education time end','trim|required|xss_clean|encode_php_tags|callback_is_future_date|callback_is_vaild_date|check_date_end');
			$this->form_validation->set_error_delimiters('<div name="error-education" class="alert alert-danger alert-dismissible" style="margin-bottom:0px;">','</div>');
			if ($this->form_validation->run() != FALSE) 
			{
				$case 		= $this->input->post('case',TRUE);
				$object_json	=$this->profile_model->column_json($this->session->userdata('ses_user_id'));
				$json_education = json_decode($object_json->profile_education_json);
				$bool = false;
				if ($case == 1)
				{
					// insert
					$n = count($json_education);
					//add education json not than 3
					if ($n < 3)
					{	
						if ($json_education == null)
						{
	 						$json_education[] = 	
								[
									'id'						=> rand(1,9999),
									'education_schools'			=> $this->my_string->remove_html_php($this->input->post('education_schools',TRUE)),
									'education_specialized'		=> $this->my_string->remove_html_php($this->input->post('education_specialized',TRUE)),
									'education_rank'			=> $this->input->post('education_rank',TRUE),
									'education_time_start'		=> $this->input->post('education_time_start',TRUE),
									'education_time_end'		=> $this->input->post('education_time_end',TRUE),
								];
						}
						else 
						{
							$json_education_next = [
								'id'						=> rand(1,9999),
								'education_schools'			=> $this->my_string->remove_html_php($this->input->post('education_schools',TRUE)),
								'education_specialized'		=> $this->my_string->remove_html_php($this->input->post('education_specialized',TRUE)),
								'education_rank'			=> $this->input->post('education_rank',TRUE),
								'education_time_start'		=> $this->input->post('education_time_start',TRUE),
								'education_time_end'		=> $this->input->post('education_time_end',TRUE),
							];
							array_push($json_education,$json_education_next);
						}
						//data
						$data = [
							'profile_education_json'		=> json_encode($json_education,JSON_UNESCAPED_UNICODE),
							'profile_date_update'		=> date("Y-m-d H:i:s",now()),
						];
						$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
						$bool = TRUE;
					}
					else 
					{
						$infomation['max_education']	= TRUE;
					}				
				} 
				else if ($case == 2) 
				{
					//edit

					foreach ($json_education as $k => $val)
					{

						if ($val->id == $this->input->post('id',TRUE))
						{
							$val->id 					= $this->input->post('id',TRUE);
							$val->education_schools 	= $this->my_string->remove_html_php($this->input->post('education_schools',TRUE));
							$val->education_specialized = $this->my_string->remove_html_php($this->input->post('education_specialized',TRUE));
							$val->education_rank 		= $this->input->post('education_rank',TRUE);
							$val->education_time_start 	= $this->input->post('education_time_start',TRUE);
							$val->education_time_end 	= $this->input->post('education_time_end',TRUE);
							break;		
						}
					}
					$data = [
						'profile_education_json'		=> json_encode($json_education,JSON_UNESCAPED_UNICODE),
						'profile_date_update'			=> date("Y-m-d H:i:s",now()),
					];
					$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
					$bool = TRUE;	
				}
				if ($bool == TRUE)
				{
					$infomation['successful']		= TRUE;
					$this->data['profile']		= $this->profile_model->data_profile($this->session->userdata('ses_user_id'));
					ob_start();
					 $this->load->view('user/profile/data_education',$this->data);
					$infomation['html_education'] 	= ob_get_contents();
					ob_end_clean();
				}
			} 
			else 
			{
				$infomation['validation']	= FALSE;
				// add error valication
				foreach ($_POST as $key => $value) 
				{
					{
						$infomation['error_messages'][$key] = form_error($key);
					}
                	
            	}
			}
			echo json_encode($infomation);
		}
	}

	public function delete_education()
	{
		if ($this->input->post('id'))
		{
			$object_json	=$this->profile_model->column_json($this->session->userdata('ses_user_id'));
			$json_education = json_decode($object_json->profile_education_json);
			$arr = [];
			foreach ($json_education as $k => $val)
			{

				if ($val->id != $this->input->post('id',TRUE))
				{
					array_push($arr,$val);
				}
			}
			$data = [
				'profile_education_json'		=> json_encode($arr,JSON_UNESCAPED_UNICODE),
				'profile_date_update'			=> date("Y-m-d H:i:s",now()),
			];
			$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
			$infomation['successful']	= TRUE;
			if ($result == FALSE)
			{
				$infomation['successful']	= FALSE;
			}
			echo json_encode($infomation,JSON_UNESCAPED_UNICODE);
		} 
	}

	public function is_future_date($date)
	{
		$current_date	= new DateTime();
		$current_date	= $current_date->format('Y-m-d');
		if (strtotime($date) > strtotime($current_date))
		{
			$this->form_validation->set_message('is_future_date', 'error is future date');
			return false;
		}
		else 
			return true;
	}

	public function is_vaild_date($date)
	{
		$day = (int) substr($date, 0, 2);
	    $month = (int) substr($date, 3, 2);
	    $year = (int) substr($date, 6, 4);
	    if (checkdate($month, $day, $year) == false)
	    {
	    	$this->form_validation->set_message('is_vaild_date', 'is not vaild date');
			return false;
	    } else {
	    	return true;
	    }
	}

	public function check_date_end($date)
	{
		$d1 = $this->input->post('education_time_start',TRUE);
		$d2 = $this->input->post('education_time_end',TRUE);
		if ($d1 == null || $d1 == '' )
		{
			$d1 = $this->input->post('company_time_start',TRUE);
			$d2 = $this->input->post('company_time_end',TRUE);
		}
		if (strtotime($d1) > strftime($d2))
		{
			$this->form_validation->set_message('check_date_end', 'date end than date strat');
			return false;
		}
		else 
			return true;
	}
	/**
	 * [update_exp ]
	 * @return [json] [description]
	 */
	public function update_exp()
	{
		if ($this->input->post())
		{
			$infomation = [];
			//validation
			$this->form_validation->set_rules('company_name', 'company name','trim|required|xss_clean|encode_php_tags|max_length[150]');
			$this->form_validation->set_rules('company_position', 'company position','trim|required|xss_clean|encode_php_tags|max_length[100]');
			$this->form_validation->set_rules('company_wage', 'company wage','trim|required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('company_description', 'company description','trim|required|xss_clean|encode_php_tags');
			$this->form_validation->set_rules('company_time_start', 'company time start','trim|required|xss_clean|encode_php_tags|callback_is_future_date|callback_is_vaild_date');
			$this->form_validation->set_rules('company_time_end', 'education time end','trim|required|xss_clean|encode_php_tags|callback_is_future_date|callback_is_vaild_date|check_date_end');
			$this->form_validation->set_error_delimiters('<div name="error-exp" class="alert alert-danger alert-dismissible" style="margin-bottom:0px;">','</div>');
			if ($this->form_validation->run() != FALSE) 
			{
				$case 		= $this->input->post('swith_case_exp',TRUE);
				$object_json	=$this->profile_model->column_json($this->session->userdata('ses_user_id'));
				$json_exp = json_decode($object_json->profile_exp_job_json);
				$bool = false;
				if ($case == 1)
				{
					// insert
					$n = count($json_exp);
					if ($n < 3)
					{	
						if ($json_exp == null)
						{
	 						$json_exp[] = 	
								[
									'id'					=> rand(1,9999),
									'company_name'			=> $this->my_string->remove_html_php($this->input->post('company_name',TRUE)),
									'company_position'		=> $this->my_string->remove_html_php($this->input->post('company_position',TRUE)),
									'company_wage'			=> $this->input->post('company_wage',TRUE),
									'company_time_start'	=> $this->input->post('company_time_start',TRUE),
									'company_time_end'		=> $this->input->post('company_time_end',TRUE),
									'company_description'	=> $this->input->post('company_description',TRUE),
								];
						}
						else 
						{
							$json_exp_next = [
								'id'					=> rand(1,9999),
								'company_name'			=> $this->my_string->remove_html_php($this->input->post('company_name',TRUE)),
								'company_position'		=> $this->my_string->remove_html_php($this->input->post('company_position',TRUE)),
								'company_wage'			=> $this->input->post('company_wage',TRUE),
								'company_time_start'	=> $this->input->post('company_time_start',TRUE),
								'company_time_end'		=> $this->input->post('company_time_end',TRUE),
								'company_description'	=> $this->input->post('company_description',TRUE),
							];
							array_push($json_exp,$json_exp_next);
						}
						//data
						$data = [
							'profile_exp_job_json'		=> json_encode($json_exp,JSON_UNESCAPED_UNICODE),
							'profile_date_update'		=> date("Y-m-d H:i:s",now()),
						];
						$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
						$bool = TRUE;
					}
					else 
					{
						$infomation['max_education']	= TRUE;
					}				
				} 
				else if ($case == 2) 
				{
					//edit
					foreach ($json_exp as $k => $val)
					{
						if ($val->id == $this->input->post('id',TRUE))
						{
							$val->id 					= $this->input->post('id',TRUE);
							$val->company_name 			= $this->my_string->remove_html_php($this->input->post('company_name',TRUE));
							$val->company_position 		=  $this->my_string->remove_html_php($this->input->post('company_position',TRUE));
							$val->company_wage 			= $this->input->post('company_wage',TRUE);
							$val->company_time_start 	= $this->input->post('company_time_start',TRUE);
							$val->company_time_end 		= $this->input->post('company_time_end',TRUE);
							$val->company_description 	= $this->input->post('company_description',TRUE);
							break;		
						}
					}
					$data = [
						'profile_exp_job_json'		=> json_encode($json_exp,JSON_UNESCAPED_UNICODE),
						'profile_date_update'		=> date("Y-m-d H:i:s",now()),
					];
					$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
					$bool = TRUE;	
				}
				if ($bool == TRUE)
				{
					$infomation['successful']		= TRUE;
					$this->data['profile']		= $this->profile_model->data_profile($this->session->userdata('ses_user_id'));
					$this->load->model('wage_model');
					$this->data['wage']			= $this->wage_model->list_wage($this->Langid);
					ob_start();
					$this->load->view('user/profile/data_exp_job',$this->data);
					$infomation['html_education'] 	= ob_get_contents();
					ob_end_clean();
				}
			} 
			else 
			{
				$infomation['validation']	= FALSE;
				// add error valication
				foreach ($_POST as $key => $value) 
				{
					{
						$infomation['error_messages'][$key] = form_error($key);
					}

            	}
			}
			echo json_encode($infomation);
		}
	}
	/**
	 * [remove exp job compaty]
	 * @return [jspon] [description]
	 */
	public function delete_exp()
	{
		if ($this->input->post('id'))
		{
			$object_json	=$this->profile_model->column_json($this->session->userdata('ses_user_id'));
			$json_exp = json_decode($object_json->profile_exp_job_json);
			$arr = [];
			foreach ($json_exp as $k => $val)
			{

				if ($val->id != $this->input->post('id',TRUE))
				{
					array_push($arr,$val);
				}
			}
			$data = [
				'profile_exp_job_json'		=> json_encode($arr,JSON_UNESCAPED_UNICODE),
				'profile_date_update'		=> date("Y-m-d H:i:s",now()),
			];
			$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
			$infomation['successful']	= TRUE;
			if ($result == FALSE)
			{
				$infomation['successful']	= FALSE;
			}
			echo json_encode($infomation,JSON_UNESCAPED_UNICODE);
		} 
	}

	public function update_language()
	{
		if ($this->input->post())
		{
			$messages =[];
			if ($this->input->post('click_language',TRUE) > 3)
			{
				$messages['max_click'] = TRUE;
				return;
			}
			$arr = json_decode($this->input->post('json_language',TRUE));
			foreach ($arr as $key => $value)
			{
				if (is_numeric($value->result_language) == false || $value->result_language == '' ||  $value->result_language == '')
				{
					$messages['validation'] = TRUE;
					return;
				}
			}
			$data = [ 
				'profile_language_json'		=> $this->input->post('json_language'),
				'profile_date_update'		=> date("Y-m-d H:i:s",now()),
			];
			$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
			$messages['successful']	= TRUE;
			echo json_encode($messages);
		}
	}

	/**
	 * [view_search description]
	 * ajax search in page user_managerfile
	 * @return [type] [description]
	 */
	public function view_search()
	{
		if ($this->input->get())
		{
			$number = ($this->input->get('profile_search',TRUE) == 1) ? '1' : '0';
			echo $number;
			$data 	= [
				'profile_search'	=> $number,
			];
			$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));		
		}
	}

	public function remove_cv()
	{
		if ($this->input->get())
		{
			$remove = $this->input->get('remove',TRUE);
			if ($remove == 1)
			{
				$data = [
					'profile_file_name'			=> '',
					'profile_file'				=> '',
					'profile_file_date_update'	=> '',
				];
				$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
				if ($result == TRUE)
				{
					unlink($this->input->get('path',TRUE));
				}
			}
		}
	}

	public function remove_profile()
	{
		if ($this->input->get())
		{
			$remove = $this->input->get('remove_profile',TRUE);
			if ($remove == 1)
			{
				$data = [
					'profile_title'				=> '',
					'profile_leve_learning'		=> '',
					'profile_career'			=> '',
					'profile_time_job'			=> '',
					'profile_exe'				=> '',
					'profile_money'				=> '',
					'profile_location'			=> '',
					'profile_target'			=> '',
					'profile_education_json'	=> '',
					'profile_language_json'		=> '',
					'profile_exp_job_json'		=> '',
					'profile_admin_confrim'		=> '',
					'profile_date_confrim'		=> '',
					'profile_date_update'		=> '',
					'profile_satus'				=> '',
					'profile_search'			=> '',
				];
				$result = $this->profile_model->update_profile($data,$this->session->userdata('ses_user_id'));
				echo $result;
			}
		}
	}
}

/* End of file ajax.php */
/* Location: ./application/modules/home/controllers/ajax.php */