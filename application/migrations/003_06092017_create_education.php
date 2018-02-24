<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_06092017_create_education extends CI_Migration {

	protected $table = 'tbl_education';
	protected $fields;

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() 
	{
		$this->fields= [
			'id' => [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'unsigned'			=>	TRUE,
           			'auto_increment'	=>	TRUE
           	],
           	'name' => [
           			'type'  			=>  'VARCHAR',
           			'constraint' 		=>	'255',
           			'null'				=>	TRUE,
           	],
           	'status' 	=> [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'null'				=>	TRUE,
           	],
           	'LangId'  	=> [
           			'type'  			=>  'INT',
           			'constraint' 		=>	'11',
           			'null'				=>	TRUE,
           	],
		];
		$this->dbforge->add_field($this->fields);
		$this->dbforge->add_key('id', TRUE);
		$attributes = array('ENGINE' => 'InnoDB');
		$this->dbforge->create_table($this->table,TRUE,$attributes);
	}

	public function down() 
	{
		$this->dbforge->drop_table($this->table);
	}

}

/* End of file 003_06092017_create_education.php */
/* Location: ./application/migrations/003_06092017_create_education.php */