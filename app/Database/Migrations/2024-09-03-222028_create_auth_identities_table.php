<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateAuthIdentitiesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateAuthIdentitiesTable extends Migration
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
		'user_id' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => false,
			'unsigned' => true,
		],
		'type' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'name' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'secret' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'secret2' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'expires' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'extra' => [
			'type' => 'TEXT',
			'null' => true,
		],
		'force_reset' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'last_used_at' => [
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
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey('user_id');

		$this->forge->addUniqueKey([ 'type', 'secret']);

		$this->forge->addForeignKey('user_id','users','id','CASCADE','RESTRICT');

        // Create Table ...
        $this->forge->createTable('auth_identities');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('auth_identities');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}