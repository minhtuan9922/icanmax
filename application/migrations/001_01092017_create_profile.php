<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_01092017_create_profile extends CI_Migration {

	protected $fields;
	protected $table = 'tbl_profile';
	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() 
	{
		
		$this->fields= [
			'profile_id' => [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'unsigned'			=>	TRUE,
           			'auto_increment'	=>	TRUE
           	],
           	'customer_id' => [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'unsigned'			=>	TRUE,
           	],
           	'profile_title' => [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'profile_leve_learning' 	=> [
           			'type'  			=>  'INT',
           			'unsigned'			=>	TRUE,
           			'null'				=>	TRUE,
           	],
            'profile_time_job'  => [
                'type'        =>  'VARCHAR',
                'constraint'    =>  '255',
                'null'        =>  TRUE,
            ],
           	'profile_career' 	=> [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'profile_exe'  	=> [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'null'				=>	TRUE,
           	],
           	'profile_money'=> [
		           	'type'  			=>  'INT',
		           	'constraint' 		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'profile_location' => [
		           	'type'  			=>  'VARCHAR',
		           	'constraint' 		=>	'255',
		           	'null'				=>	TRUE,
           	],
           	'profile_target' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_education_json' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_language_json' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_exp_job_json' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_admin_confrim' => [
		           	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
           	],

            'profile_date_confrim'   => [
                'type'        =>  'DATETIME',
                'null'        =>  TRUE,
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

            'profile_file_name' => [
                'type'        =>  'VARCHAR',
                'constraint'  =>  '255',
                'null'        =>  TRUE,
            ],

           	'profile_file' => [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'profile_file_date_update' 	=> [
		           	'type'  			=>  'DATETIME',
		           	'null'				=>	TRUE,
           	],
           	'profile_view' 	=> [
		           	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
           	],

            'profile_search'  => [
                'type'        =>  'INT',
                'constraint'    =>  '11',
                'null'        =>  TRUE,
            ],
		];
		$this->dbforge->add_field($this->fields);
		$this->dbforge->add_key('profile_id', TRUE);
		$attributes = array('ENGINE' => 'InnoDB');
		$this->dbforge->create_table($this->table,TRUE,$attributes);
	}

	public function down() {
		$this->dbforge->drop_table($this->table);
		
	}

}

/* End of file 001_01092017_add_profile_in_customer.php */
/* Location: ./application/migrations/001_01092017_add_profile_in_customer.php */