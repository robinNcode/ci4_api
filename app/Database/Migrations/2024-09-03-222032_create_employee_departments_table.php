<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateEmployeeDepartmentsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateEmployeeDepartmentsTable extends Migration
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
		'mnemonic' => [
			'type' => 'VARCHAR',
			'constraint' => 10,
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');


		$this->forge->addUniqueKey('name');


        // Create Table ...
        $this->forge->createTable('employee_departments');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('employee_departments');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}