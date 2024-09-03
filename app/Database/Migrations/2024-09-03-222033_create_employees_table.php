<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateEmployeesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'MEDIUMINT',
			'constraint' => 8,
			'null' => false,
			'unsigned' => true,
			'auto_increment' => true,
		],
		'branch_id' => [
			'type' => 'SMALLINT',
			'constraint' => 5,
			'null' => false,
			'unsigned' => true,
		],
		'designation_id' => [
			'type' => 'SMALLINT',
			'constraint' => 5,
			'null' => false,
			'unsigned' => true,
		],
		'name' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => false,
		],
		'code' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => true,
		],
		'fathers_name' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => false,
		],
		'mothers_name' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => false,
		],
		'spouse_name' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => true,
		],
		'permanent_address' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => true,
		],
		'present_address' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => true,
		],
		'last_achieved_degree' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'date_of_birth' => [
			'type' => 'DATE',
			'null' => true,
		],
		'date_of_joining' => [
			'type' => 'DATE',
			'null' => true,
		],
		'date_of_discontinue' => [
			'type' => 'DATE',
			'null' => true,
		],
		'secuirity_money' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'starting_salary' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'current_salary' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'national_id' => [
			'type' => 'BIGINT',
			'constraint' => 20,
			'null' => true,
		],
		'smart_id' => [
			'type' => 'BIGINT',
			'constraint' => 20,
			'null' => true,
		],
		'blood_group' => [
			'type' => 'VARCHAR',
			'constraint' => 3,
			'null' => true,
		],
		'gender' => [
			'type' => 'VARCHAR',
			'constraint' => 1,
			'null' => true,
		],
		'mobile_no' => [
			'type' => 'VARCHAR',
			'constraint' => 30,
			'null' => true,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'status' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'employee_picture' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => true,
		],
		'refence_info_1' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => true,
		],
		'refence_info_2' => [
			'type' => 'VARCHAR',
			'constraint' => 500,
			'null' => true,
		],
		'attached_documents' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => true,
		],
		'is_field_officer' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'is_manager' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'id_sequence_no' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'sync_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'field_officer_pin' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'nominee_info' => [
			'type' => 'TEXT',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey('designation_id');
		$this->forge->addKey('branch_id');


		$this->forge->addForeignKey('branch_id','po_branches','id','RESTRICT','RESTRICT');
		$this->forge->addForeignKey('designation_id','employee_designations','id','RESTRICT','RESTRICT');

        // Create Table ...
        $this->forge->createTable('employees');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('employees');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}