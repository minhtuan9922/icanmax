<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_01092017_add_profile_in_customer extends CI_Migration {

	protected $fields;
	protected $table = 'tbl_customer';
	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() 
	{
		
		$this->fields= [
           	'profile_title' => [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'profile_general_json' 	=> [
           			'type'  			=>  'TEXT',
           			'null'				=>	TRUE,
           	],
           	'profile_career_json'  	=> [
           			'type'  			=>  'TEXT',
           			'null'				=>	TRUE,
           	],
           	'profile_education_json'=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_language_json' => [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_exp_json' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_admin_confrim' => [
		           	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'profile_date_update' 	=> [
		           	'type'  			=>  'DATETIME',
		           	'null'				=>	TRUE,
           	],
           	'profile_satus' => [
		           	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'profile_file' => [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_file_date_update' 	=> [
		           	'type'  			=>  'DATETIME',
		           	'null'				=>	TRUE,
           	],


		];
		$this->dbforge->add_column($this->table,$this->fields);
	}

	public function down() {
		$this->dbforge->drop_column($this->table,'profile_title');
		$this->dbforge->drop_column($this->table,'profile_general_json');
		$this->dbforge->drop_column($this->table,'profile_career_json');
		$this->dbforge->drop_column($this->table,'profile_education_json');
		$this->dbforge->drop_column($this->table,'profile_language_json');
		$this->dbforge->drop_column($this->table,'profile_exp_json');
		$this->dbforge->drop_column($this->table,'profile_admin_confrim');
		$this->dbforge->drop_column($this->table,'profile_admin_confrim');
		$this->dbforge->drop_column($this->table,'profile_date_update');
		$this->dbforge->drop_column($this->table,'profile_satus');
		$this->dbforge->drop_column($this->table,'profile_file_date_update');
	}

}

/* End of file 001_01092017_add_profile_in_customer.php */
/* Location: ./application/migrations/001_01092017_add_profile_in_customer.php */