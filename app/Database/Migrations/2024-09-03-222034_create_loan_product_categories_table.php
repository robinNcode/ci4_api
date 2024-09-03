<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateLoanProductCategoriesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateLoanProductCategoriesTable extends Migration
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
		'short_name' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => false,
		],
		'is_savings_deposite_frequency_overridden' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'savings_deposite_frequency' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'monthly_collection_week' => [
			'type' => 'CHAR',
			'constraint' => 2,
			'null' => true,
		],
		'product_category_type' => [
			'type' => 'CHAR',
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




        // Create Table ...
        $this->forge->createTable('loan_product_categories');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('loan_product_categories');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}