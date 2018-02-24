<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
	protected $table='tbl_profile';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function data_profile($customer_id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('customer_id',$customer_id);
		return $this->db->get()->row();
	}

	public function column_json($customer_id)
	{
		$this->db->select('profile_education_json, profile_language_json, profile_exp_job_json');
		$this->db->from($this->table);
		$this->db->where('customer_id',$customer_id);
		return $this->db->get()->row();
	}

	public function update_profile($data,$customer_id)
	{
		$this->db->trans_start();
		$this->db->where('customer_id',$customer_id);
		$this->db->update($this->table,$data);
		return $this->db->trans_complete();
	}

	/**
	 * [detail_profile description]
	 * @param  [int] $id_profile [id profile]
	 * tbl_customer.status =1 người tim viec
	 * @return [row]             [limit 1]
	 */
	public function detail_profile($id_profile)
	{
		$this->db->select('id,name,fullname,gender,phone,address,email,ip,birthday,status,vip,type,img,profile_date_update,profile_date_confrim,profile_id,customer_id,profile_title,profile_leve_learning,profile_career,profile_time_job,profile_exe,profile_money,profile_location,profile_target,profile_education_json,profile_language_json,profile_admin_confrim,profile_satus,profile_file_name,profile_file,profile_file_date_update,profile_view,profile_search,user_name');
		$this->db->from($this->table);
		$this->db->join('tbl_customer','tbl_customer.id = tbl_profile.customer_id','inner');
		$this->db->join('tbl_user','profile_admin_confrim = user_id','left');
		$this->db->where(['tbl_customer.status' => '1', 'tbl_profile.profile_id' => $id_profile]);
		return $this->db->get()->row();
	}

	/**
	 * [select list silimar career and location ]
	 * location only match array 0
	 * career max 3 so only match 3 
	 * @param  [array] $career_profile   [description]
	 * @param  [array] $location_profile [description]
	 * @param  [int]   $id_profile 		 [description]
	 * @return [result_array]            [description]
	 */
	public function profile_silimar($career_profile, $location_profile, $id_profile)
	{
		$count_career 	= count($career_profile);
		$count_location = count($location_profile);
		//$n 				= ($count_career >= $count_location) ? $count_location : $count_career;
		$sql 			= '';
		$param 			= [];
		for ($i=0; $i < 3; $i++)
		{
			if ($i == 0)
			{
				$sql.="SELECT profile_id,profile_exe,profile_title,profile_leve_learning,profile_career,profile_money,profile_location,profile_date_update,fullname FROM tbl_customer 
						INNER JOIN tbl_profile  
						ON tbl_customer.id = tbl_profile.customer_id
						WHERE tbl_customer.status = 1 AND tbl_profile.profile_career like  ? '%'  AND tbl_profile.profile_location like  ? '%' AND tbl_profile.profile_id != ?
						";
				array_push($param,!empty($career_profile[$i]) ? $career_profile[$i] : $career_profile[$count_career-1]);
				array_push($param,$location_profile[0]);
				array_push($param,$id_profile);
			} else if($i == 1) {
				$sql.="
						UNION
						SELECT profile_id,profile_exe,profile_title,profile_leve_learning,profile_career,profile_money,profile_location,profile_date_update,fullname FROM tbl_customer 
						INNER JOIN tbl_profile  
						ON tbl_customer.id = tbl_profile.customer_id
						WHERE tbl_customer.status = 1 AND tbl_profile.profile_career like '%' ? '%' AND tbl_profile.profile_location like '%' ? '%' AND tbl_profile.profile_id != ?
						";
				array_push($param,!empty($career_profile[$i]) ? $career_profile[$i] : $career_profile[$count_career-1]);
				array_push($param,$location_profile[0]);
				array_push($param,$id_profile);
			} 
			if ($i == 2)
			{
				$sql.="
						UNION
						SELECT profile_id,profile_exe,profile_title,profile_leve_learning,profile_career,profile_money,profile_location,fullname,profile_date_update FROM tbl_customer 
						INNER JOIN tbl_profile  
						ON tbl_customer.id = tbl_profile.customer_id
						WHERE tbl_customer.status = 1 AND tbl_profile.profile_career like '%' ?  AND tbl_profile.profile_location like '%' ?  AND tbl_profile.profile_id != ?
						";
				array_push($param,!empty($career_profile[$i]) ? $career_profile[$i] : $career_profile[$count_career-1]);
				array_push($param,$location_profile[0]);
				array_push($param,$id_profile);
				$sql.="ORDER BY profile_date_update DESC LIMIT 10";
			}
		}
		return $this->db->query($sql,$param)->result_array();
	}
	/**
	 * [profile_hightlight description]
	 * vip = 1 : profile customer highlights
	 * cus.type =2 : job seeker
	 * @return [type] [description]
	 */
	public function profile_highlights()
	{
		$this->db->select('cus.fullname,cus.img,profile_title,profile_location,profile_id');
		$this->db->from('tbl_profile as pro');
		$this->db->join('tbl_customer as cus','cus.id = pro.customer_id','inner');
		$this->db->where(['cus.vip' => '1', 'cus.type' => '2']);
		return $this->db->get()->result_array();
	}

	public function insert_profile($customer_id)
	{
		$data=['customer_id' => $customer_id];
		return $this->db->insert($this->table,$data);
	}

	public function select_file($customer_id)
	{
		$this->db->select('profile_file');
		$this->db->from('tbl_profile');
		$this->db->where('customer_id',$customer_id);
		return $this->db->get()->row();
	}

	public function list_profile()
	{
		$this->db->select('profile_id,profile_exe,profile_title,profile_leve_learning,profile_career,profile_money,profile_location,fullname,profile_date_update');
		$this->db->from('tbl_profile as pro');
		$this->db->join('tbl_customer as cus','cus.id = pro.customer_id','inner');
		$this->db->where(['profile_satus' => 1, 'profile_search' => 1 ]);
		if (!empty($this->input->get('key_word',TRUE)))
		{
			$this->db->like('profile_title',$this->input->get('key_word',TRUE),'both');
		}
		if (!empty($this->input->get('chose-career',TRUE)))
		{
			$this->db->like('profile_career',$this->input->get('chose-career',TRUE),'both');
		}
		if (!empty($this->input->get('chose-location',TRUE)))
		{
			$this->db->like('profile_location',$this->input->get('chose-location',TRUE),'both');
		}
		if (!empty($this->input->get('chose-wage',TRUE)))
		{
			$this->db->where('profile_money',$this->input->get('chose-wage',TRUE));
		}
		if (!empty($this->input->get('chose-gender',TRUE)))
		{
			$this->db->where('gender',$this->input->get('chose-gender',TRUE));
		}
		if (!empty($this->input->get('chose-certificate',TRUE)))
		{
			$this->db->where('profile_leve_learning',$this->input->get('chose-certificate',TRUE));
		}
		if (!empty($this->input->get('chose-exp',TRUE)))
		{
			$this->db->where('profile_exe',$this->input->get('chose-exp',TRUE));
		}
		$this->db->order_by('profile_date_update','DESC');
		return $this->db->get()->result_array();
	}
}

/* End of file profile_model.php */
/* Location: ./application/models/profile_model.php */