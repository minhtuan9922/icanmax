<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_25092017_create_employer extends CI_Migration {

	protected $fields;
	protected $table = 'tbl_employer';

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->fields= [
			'employer_id' => [
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
           	'employer_title' => [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'employer_name' => [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
            'employer_address' => [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'employer_career' 	=> [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'employer_exp'  	=> [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'null'				=>	TRUE,
           	],
           	'employer_wage'=> [
		           	'type'  			=>  'INT',
		           	'constraint' 		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'employer_location' => [
		           	'type'  			=>  'VARCHAR',
		           	'constraint' 		=>	'255',
		           	'null'				=>	TRUE,
           	],
           	'employer_time_job' 	=> [
		           	'type'  			=>  'VARCHAR',
		           	'constraint' 		=>	'255',
		           	'null'				=>	TRUE,
           	],
           	'employer_position' 	=> [
		           	'type'  			=>  'VARCHAR',
		           	'constraint' 		=>	'255',
		           	'null'				=>	TRUE,
           	],
           	'employer_number' 	=> [
		           	'type'  			=>  'INT',
		           	'constraint' 		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'employer_education' 	=> [
		           	'type'  			=>  'INT',
		           	'constraint' 		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'employer_description' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'employer_requirement_job' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'employer_interest' 	=> [
		           	'type'  			=>  'TEXT',
		           	'null'				=>	TRUE,
           	],
           	'employer_deadline'   => [
	                'type'       		=>  'DATETIME',
	                'null'       		=>  TRUE,
            ],
           	'employer_contact' 	=> [
		           	'type'  			=>  'VARCHAR',
		           	'constraint' 		=>	'255',
		           	'null'				=>	TRUE,
           	],
           	'employer_gender' 	=> [
		           	'type'  			=>  'INT',
		           	'constraint' 		=>	'11',
		           	'null'				=>	TRUE,
           	],
           	'employer_admin_confrim' => [
		           	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
           	],
            'employer_date_confrim'   => [
	                'type'       		=>  'DATETIME',
	                'null'       		=>  TRUE,
            ],
            'employer_confrim_exists'   => [
                	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
            ],
           	'employer_date_update' 	=> [
		           	'type'  			=>  'DATETIME',
		           	'null'				=>	TRUE,
           	],
           	'employer_satus' => [
		           	'type'  			=>  'INT',
		           	'constraint'		=>	'11',
		           	'null'				=>	TRUE,
           	],
		];
		$this->dbforge->add_field($this->fields);
		$this->dbforge->add_key('employer_id', TRUE);
		$attributes = array('ENGINE' => 'InnoDB');
		$this->dbforge->create_table($this->table,TRUE,$attributes);
	}

	public function down() {
		$this->dbforge->drop_table($this->table);
	}

}

/* End of file 006_25092017_create_employer.php */
/* Location: ./application/migrations/006_25092017_create_employer.php */