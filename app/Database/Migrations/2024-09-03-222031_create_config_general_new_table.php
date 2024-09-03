<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateConfigGeneralNewTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateConfigGeneralNewTable extends Migration
{
    public function up()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            
		'id' => [
			'type' => 'INT',
			'constraint' => 10,
			'null' => false,
			'unsigned' => true,
			'auto_increment' => true,
		],
		'purpose' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'label_name' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'field_name' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'field_type' => [
			'type' => 'VARCHAR',
			'constraint' => 10,
			'null' => true,
		],
		'field_value' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'default_value' => [
			'type' => 'TEXT',
			'null' => true,
		],
		'is_required' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'db_field_name' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'dependent_field_name' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'is_admin_access_only' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'is_disabled' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'validate_rules' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey('purpose');

		$this->forge->addUniqueKey('db_field_name');
		$this->forge->addUniqueKey('field_name');


        // Create Table ...
        $this->forge->createTable('config_general_new');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('config_general_new');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}