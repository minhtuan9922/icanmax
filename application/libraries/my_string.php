<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_string
{
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function hash_password($str)
	{
		$options=[
		'cost' => 12,
		];
		$hash_str=password_hash($str,PASSWORD_BCRYPT,$options);
		return $hash_str;
	}

	public function verify_hash($str,$hash_str)
	{
		$result=password_verify($str,$hash_str);
		return $result;
	}

	public function remove_html_php($str)
	{
		return preg_replace('/([^\pL\.\ ]+)/u','', strip_tags(trim($str)));
	}
	
	public function conver_htmlentities($str)
	{
		return htmlentities(trim($str),ENT_COMPAT,'UTF-8');
	}

	public function remove_vn_unicode($str)
	{
		if(!$str) return false;
		$unicode = array(
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			'd'=>'đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'i'=>'í|ì|ỉ|ĩ|ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
		);
		foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
		return strtolower($str);
	}
}

/* End of file my_string.php */
/* Location: ./application/libraries/my_string.php */
