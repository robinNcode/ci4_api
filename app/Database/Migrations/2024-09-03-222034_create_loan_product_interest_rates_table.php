<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateLoanProductInterestRatesTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateLoanProductInterestRatesTable extends Migration
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
		],
		'loan_product_id' => [
			'type' => 'SMALLINT',
			'constraint' => 5,
			'null' => false,
			'unsigned' => true,
		],
		'interest_rate' => [
			'type' => 'DECIMAL',
			'constraint' => '7,5',
			'null' => true,
		],
		'interest_rate_index' => [
			'type' => 'DECIMAL',
			'constraint' => '10,8',
			'null' => true,
		],
		'interest_calculation_method' => [
			'type' => 'CHAR',
			'constraint' => 3,
			'null' => false,
		],
		'decline_period' => [
			'type' => 'CHAR',
			'constraint' => 10,
			'null' => true,
		],
		'mode_of_interest' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => false,
		],
		'effective_date_from' => [
			'type' => 'DATE',
			'null' => false,
		],
		'effective_date_to' => [
			'type' => 'DATE',
			'null' => true,
		],
		'status' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'note' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'enforce_number_of_installment' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'enforced_install_number' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'is_show_rec_after_loan_period' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'is_loan_period_in_day_fixed' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'repayment_frequency' => [
			'type' => 'CHAR',
			'constraint' => 2,
			'null' => true,
		],
		'number_of_installment' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'is_installment_amt_independent' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'schedule_type' => [
			'type' => 'VARCHAR',
			'constraint' => 10,
			'null' => true,
		],
		'collection_period' => [
			'type' => 'VARCHAR',
			'constraint' => 10,
			'null' => true,
		],
		'is_auto_rebate_allowed' => [
			'type' => 'TINYINT',
			'constraint' => 3,
			'null' => true,
			'unsigned' => true,
		],
		'interest_grace_period' => [
			'type' => 'VARCHAR',
			'constraint' => 25,
			'null' => true,
		],
		'interest_calculation_period' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'is_avoid_multiple_schedule' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'cut_off_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'is_auto_cal_installment_amount' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'per_thousand_installment' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'is_fixed_total_interest_amount' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'per_thousand_total_interest_amount' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'is_service_charge_taken_initially' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'is_daily_basis' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'sms_type' => [
			'type' => 'TEXT',
			'null' => true,
		],
		'is_principal_amount_divided_into_multiple_installments' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'number_of_principal_installment' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'overdue_period' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
	    ]);

	    // table keys ...
        
		$this->forge->addPrimaryKey('id');

		$this->forge->addKey('loan_product_id');


		$this->forge->addForeignKey('loan_product_id','loan_products','id','RESTRICT','RESTRICT');

        // Create Table ...
        $this->forge->createTable('loan_product_interest_rates');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('loan_product_interest_rates');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}