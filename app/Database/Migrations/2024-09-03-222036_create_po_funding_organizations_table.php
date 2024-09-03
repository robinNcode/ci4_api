<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreatePoFundingOrganizationsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreatePoFundingOrganizationsTable extends Migration
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
			'constraint' => 100,
			'null' => false,
		],
		'division_name' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'division_code' => [
			'type' => 'VARCHAR',
			'constraint' => 5,
			'null' => true,
		],
		'division_type' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'division_status' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'concern_person' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'address' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'land_phone' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'mobile_phone' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'funding_org_type' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => false,
		],
		'parent_id' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'is_division' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'insert_time timestamp NULL DEFAULT current_timestamp()',
		'update_time' => [
			'type' => 'TIMESTAMP',
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');


		$this->forge->addUniqueKey('name');


        // Create Table ...
        $this->forge->createTable('po_funding_organizations');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('po_funding_organizations');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}