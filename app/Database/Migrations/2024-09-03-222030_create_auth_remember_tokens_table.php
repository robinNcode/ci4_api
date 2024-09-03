<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateAuthRememberTokensTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateAuthRememberTokensTable extends Migration
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
		'selector' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'hashedValidator' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'user_id' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => false,
			'unsigned' => true,
		],
		'expires' => [
			'type' => 'DATETIME',
			'null' => false,
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

		$this->forge->addKey('user_id');

		$this->forge->addUniqueKey('selector');

		$this->forge->addForeignKey('user_id','users','id','CASCADE','RESTRICT');

        // Create Table ...
        $this->forge->createTable('auth_remember_tokens');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('auth_remember_tokens');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}