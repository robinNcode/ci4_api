<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreatePoBranchesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreatePoBranchesTable extends Migration
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
		'code' => [
			'type' => 'VARCHAR',
			'constraint' => 50,
			'null' => false,
		],
		'opening_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'sw_start_date_of_operation' => [
			'type' => 'DATE',
			'null' => true,
		],
		'branch_images' => [
			'type' => 'VARCHAR',
			'constraint' => 200,
			'null' => true,
		],
		'district_id' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'thana_id' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'address' => [
			'type' => 'TEXT',
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
		'fax' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'id_sequence_no' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'is_head_office' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'is_enabled' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'is_independent' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'independent_from_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'branch_type' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'is_offline_branch' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'mandatory_savings_proposed_loan_applicable' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'is_fingerprint_enabled' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'is_other_option_enabled' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'is_islamic_branch' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'removed_last_month_end_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'last_offline_data_exported_on' => [
			'type' => 'DATE',
			'null' => true,
		],
		'work_start_time' => [
			'type' => 'VARCHAR',
			'constraint' => 11,
			'null' => true,
		],
		'work_end_time' => [
			'type' => 'VARCHAR',
			'constraint' => 11,
			'null' => true,
		],
		'notification_messege' => [
			'type' => 'TEXT',
			'null' => true,
		],
		'lat' => [
			'type' => 'DOUBLE',
			'null' => true,
		],
		'lng' => [
			'type' => 'DOUBLE',
			'null' => true,
		],
		'branch_closing_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'updated_by' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'updated_on' => [
			'type' => 'DATETIME',
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
        $this->forge->createTable('po_branches');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('po_branches');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}