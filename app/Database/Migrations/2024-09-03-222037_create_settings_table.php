<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateSettingsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateSettingsTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'constraint' => 9,
			'null' => false,
			'auto_increment' => true,
		],
		'class' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'key' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'value' => [
			'type' => 'TEXT',
			'null' => true,
		],
		'type' => [
			'type' => 'VARCHAR',
			'constraint' => 31,
			'null' => false,
		],
		'context' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'updated_at' => [
			'type' => 'DATETIME',
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');




        // Create Table ...
        $this->forge->createTable('settings');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('settings');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}