<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateEmployeeDesignationsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateEmployeeDesignationsTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'SMALLINT',
			'constraint' => 5,
			'null' => false,
			'unsigned' => true,
			'auto_increment' => true,
		],
		'department_id' => [
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
		'short_name' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'minimum_salary' => [
			'type' => 'FLOAT',
			'null' => true,
		],
		'is_manager' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'report_sorting_order' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'loan_approval_amount' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => false,
		],
		'is_approver' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'is_loan_proposal_approver' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey('department_id');

		$this->forge->addUniqueKey([ 'department_id', 'name']);
		$this->forge->addUniqueKey([ 'department_id', 'short_name']);

		$this->forge->addForeignKey('department_id','employee_departments','id','RESTRICT','RESTRICT');

        // Create Table ...
        $this->forge->createTable('employee_designations');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('employee_designations');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}