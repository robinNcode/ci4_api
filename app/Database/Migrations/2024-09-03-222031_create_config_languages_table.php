<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateConfigLanguagesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateConfigLanguagesTable extends Migration
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
			'auto_increment' => true,
		],
		'module_name' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => false,
		],
		'label_name' => [
			'type' => 'VARCHAR',
			'constraint' => 150,
			'null' => false,
		],
		'lang_english' => [
			'type' => 'VARCHAR',
			'constraint' => 250,
			'null' => false,
		],
		'lang_bengali' => [
			'type' => 'TEXT',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey('module_name');

		$this->forge->addUniqueKey('label_name');


        // Create Table ...
        $this->forge->createTable('config_languages');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('config_languages');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}