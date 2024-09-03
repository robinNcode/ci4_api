<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateAuthTokenLoginsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateAuthTokenLoginsTable extends Migration
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
		'ip_address' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'user_agent' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'id_type' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'identifier' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'user_id' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
			'unsigned' => true,
		],
		'date' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'success' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey([ 'id_type', 'identifier']);
		$this->forge->addKey('user_id');



        // Create Table ...
        $this->forge->createTable('auth_token_logins');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('auth_token_logins');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}