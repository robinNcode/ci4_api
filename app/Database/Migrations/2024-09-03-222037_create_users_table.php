<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateUsersTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateUsersTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => false,
			'unsigned' => true,
			'auto_increment' => true,
		],
		'username' => [
			'type' => 'VARCHAR',
			'constraint' => 30,
			'null' => true,
		],
		'status' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'status_message' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'active' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'last_active' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'updated_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'deleted_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');


		$this->forge->addUniqueKey('username');


        // Create Table ...
        $this->forge->createTable('users');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('users');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}