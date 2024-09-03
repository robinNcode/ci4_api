<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 * @class CreateLoanProductsTable
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Migrations
 * @extend CodeIgniter\Database\Migration
 * @generated_at 03 September, 2024 10:20:28 PM
 */

class CreateLoanProductsTable extends Migration
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
		'code' => [
			'type' => 'VARCHAR',
			'constraint' => 10,
			'null' => true,
		],
		'loan_product_category_id' => [
			'type' => 'SMALLINT',
			'constraint' => 5,
			'null' => false,
			'unsigned' => true,
		],
		'is_primary_product' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
		],
		'start_date' => [
			'type' => 'DATE',
			'null' => true,
		],
		'minimum_loan_amount' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'maximum_loan_amount' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'default_loan_amount' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'funding_organization_id' => [
			'type' => 'SMALLINT',
			'constraint' => 5,
			'null' => false,
			'unsigned' => true,
		],
		'gl_code_for_principal' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'gl_code_for_interest' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'grace_period' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'is_insurance_applicable' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'is_multiple_loan_allowed_for_primary_products' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'insurance_calculation_method' => [
			'type' => 'TINYINT',
			'constraint' => 4,
			'null' => true,
		],
		'maximum_insurance_amount' => [
			'type' => 'DOUBLE',
			'null' => true,
		],
		'insurance_amount' => [
			'type' => 'DOUBLE',
			'null' => true,
		],
		'insurance_amount_1' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'gl_code_for_insurance' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'gl_code_for_saving_collection' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'gl_code_for_saving_interest' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'gl_code_for_skt_collection' => [
			'type' => 'VARCHAR',
			'constraint' => 20,
			'null' => true,
		],
		'number_of_installment' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'loan_product_type' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'repayment_frequency' => [
			'type' => 'CHAR',
			'constraint' => 2,
			'null' => true,
		],
		'eligible_repayment_frequency' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'interest_payment_frequency' => [
			'type' => 'CHAR',
			'constraint' => 1,
			'null' => true,
		],
		'mode_of_monthly_collection' => [
			'type' => 'VARCHAR',
			'constraint' => 5,
			'null' => true,
		],
		'monthly_collection_day_or_week' => [
			'type' => 'VARCHAR',
			'constraint' => 3,
			'null' => true,
		],
		'write_off_eligible_years' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'loan_form_fee' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'health_expenditure' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'risk_insurance' => [
			'type' => 'DECIMAL',
			'constraint' => '10,5',
			'null' => true,
		],
		'additional_fee' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'member_admission_fee' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'maximum_loan_amount_for_additional_fee_applicable' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'maximum_loan_amount_for_insurance_applicable' => [
			'type' => 'DECIMAL',
			'constraint' => '10,2',
			'null' => true,
		],
		'skip_last_week_calculation_monthly' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'additional_fee_calculation_method' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'mandatory_savings_amount' => [
			'type' => 'MEDIUMINT',
			'constraint' => 9,
			'null' => true,
		],
		'is_sms_service_applicable' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'minimum_loan_amount_for_sms' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'is_actual_daily_basis' => [
			'type' => 'TINYINT',
			'constraint' => 4,
			'null' => true,
		],
		'savings_deposit_percentage_new_disburse' => [
			'type' => 'DECIMAL',
			'constraint' => '3,2',
			'null' => true,
		],
		'savings_deposit_percentage_repeat_disburse' => [
			'type' => 'DECIMAL',
			'constraint' => '3,2',
			'null' => true,
		],
		'savings_deposit_loan_amount_range' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'loan_amount_percentage_for_savings_deposit' => [
			'type' => 'DECIMAL',
			'constraint' => '3,2',
			'null' => true,
		],
		'is_epi' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'loan_type' => [
			'type' => 'VARCHAR',
			'constraint' => 100,
			'null' => true,
		],
		'is_fixed_interest_roundup' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'audit_fee' => [
			'type' => 'DECIMAL',
			'constraint' => '10,0',
			'null' => true,
		],
		'optional_loan_taken' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'days_after_disburse' => [
			'type' => 'SMALLINT',
			'constraint' => 6,
			'null' => true,
		],
		'is_short_term' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'is_auto_cal_paramedic_welfare_insurance_amount' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'loan_disbursement_stop' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'loan_disbursement_stop_from' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'loan_disbursement_stop_to' => [
			'type' => 'INT',
			'constraint' => 11,
			'null' => true,
		],
		'is_islamic_product' => [
			'type' => 'TINYINT',
			'constraint' => 4,
			'null' => true,
		],
		'is_capture_pksf_id' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => true,
		],
		'is_show_auto_process' => [
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

		$this->forge->addKey('loan_product_category_id');
		$this->forge->addKey('funding_organization_id');


		$this->forge->addForeignKey('loan_product_category_id','loan_product_categories','id','RESTRICT','RESTRICT');
		$this->forge->addForeignKey('funding_organization_id','po_funding_organizations','id','RESTRICT','RESTRICT');

        // Create Table ...
        $this->forge->createTable('loan_products');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        // disable foreign key check ...
        $this->db->disableForeignKeyChecks();

        // Drop Table ...
        $this->forge->dropTable('loan_products');

        //enable foreign key check ...
        $this->db->enableForeignKeyChecks();
    }
}