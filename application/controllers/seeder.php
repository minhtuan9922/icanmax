<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {

	protected $faker;
	public function __construct()
	{
		parent::__construct();
		//faker
		$this->faker = Faker\Factory::create();
		//model
		$this->load->model('time_job_model');
        $this->load->model('education_model');
        $this->load->model('target_model');
        $this->load->model('language_model');
	}

	public function index()
	{
		
		
	}

	public function sedd()
	{
		try 
        {
    		// purge existing data
            $this->_truncate_db();
            // seed users
            $this->_seed_time_job(5);
        } catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
	}

    public function seeder_education()
    {
        // purge existing data
        $this->education_model->truncate();
        $name=['Đại Học','Cao Đẳng'];
        $limit=count($name);
        for ($i=0; $i < $limit; $i++) { 
            $data = [
                'name'          => $name[$i],
                'status'        => '1',
                'LangId'        => '1',    
            ];
            $this->education_model->insert($data);
        }
    }

    public function seeder_target()
    {
        // purge existing data
        $this->target_model->truncate();
        $name=['Mong muốn tìm được chổ làm ổn định','Mong muốn có cơ hội thăng tiến','Mong muốn mức lương hấp dẫn'];
        $limit=count($name);
        for ($i=0; $i < $limit; $i++) { 
            $data = [
                'name'          => $name[$i],
                'status'        => '1',
                'LangId'        => '1',    
            ];
            $this->target_model->insert($data);
        }
    }

    public function seeder_language()
    {
        // purge existing data
        $this->language_model->truncate();
        $name                   = ['Tiếng Anh','Tiếng Nhật','Tiếng Việt Nam'];
        $certificate_enghlish   = 'TOEIC,IELTS,TOEFL,SAT,GMAT,GRE';
        $certificate_japan      = 'N1,N2,N3,N4,N5';
        $certificate_vietnam    = 'TIỂU HỌC,TRUNG HỌC,PHỔ THÔNG';
        $certificate            = '';
        $limit=count($name);
        for ($i=0; $i < $limit; $i++) {
            if ($i==0) $certificate = $certificate_enghlish;
            if ($i==1) $certificate = $certificate_japan;
            if ($i==2) $certificate = $certificate_vietnam;
            $data = [
                'name'          => $name[$i],
                'certificate'   => $certificate,
                'status'        => '1',
                'LangId'        => '1',    
            ];
            $this->language_model->insert($data);
        }
    }

	function _seed_time_job($limit)
    {
        try 
        {
            // create a bunch of base buyer accounts
            $name=['Toàn thời gian','Bán thời gian','Thực tập','Bán thời gian tạm thời','Khác'];
            for ($i = 0; $i < $limit; $i++) 
            {
                $data = array(
                'name' => $name[$i], // get a unique nickname
                'status' => '1',
                'LangId' => '1',
                /*'name' => $this->faker->unique()->userName, // get a unique nickname
                'status' => mt_rand(0,1) ? '0' : '1',
                'LangId' => mt_rand(0,2) ? '1' : '2',*/
                /*'password' => md5('12345'), // run this via your password hashing function
                'firstname' => $this->faker->firstName,
                'lastName' => $this->faker->lastName,
                'gender' => rand(0, 1) ? 'male' : 'female',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, rem, est! Omnis perferendis, nisi obcaecati modi aliquam, neque! Culpa quia, animi itaque numquam praesentium nemo ut repudiandae eius, debitis nulla.',
                'address' => $this->faker->streetAddress,
                'city' => $this->faker->city,
                'state' => $this->faker->state,
                'country' => $this->faker->country,
                'postcode' => $this->faker->postcode,
                'email' => $this->faker->email,
                'email_verified' => mt_rand(0, 1) ? '0' : '1',
                'phone' => $this->faker->phoneNumber,
                'birthdate' => $this->faker->dateTimeThisCentury->format('Y-m-d H:i:s'),
                'registration_date' => $this->faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'ip_address' => mt_rand(0, 1) ? $this->faker->ipv4 : $this->faker->ipv6,
                'status' => $i === 0 ? true : rand(0, 1),*/
                );

                $this->time_job_model->insert($data);
            }
        }
        catch (Exception $e) 
        {

          var_dump($e->getMessage());
        }
    }
 
    private function _truncate_db()
    {
        $this->time_job_model->truncate();
    }




}

/* End of file seeder.php */
/* Location: ./application/controllers/seeder.php */