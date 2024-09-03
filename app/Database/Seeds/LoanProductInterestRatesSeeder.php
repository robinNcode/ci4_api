<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class LoanProductInterestRatesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class LoanProductInterestRatesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $loan_product_interest_rates = [
            ['id' => '1','loan_product_id' => '1','interest_rate' => '12.50000','interest_rate_index' => '1.12500000','interest_calculation_method' => 'DFD','decline_period' => NULL,'mode_of_interest' => 'H','effective_date_from' => '2016-01-01','effective_date_to' => NULL,'status' => 'A','note' => NULL,'enforce_number_of_installment' => '0','enforced_install_number' => '-1','is_show_rec_after_loan_period' => '0','is_loan_period_in_day_fixed' => '0','repayment_frequency' => 'W','number_of_installment' => NULL,'is_installment_amt_independent' => '0','schedule_type' => NULL,'collection_period' => NULL,'is_auto_rebate_allowed' => '0','interest_grace_period' => '1_W','interest_calculation_period' => NULL,'is_avoid_multiple_schedule' => '0','cut_off_date' => NULL,'is_auto_cal_installment_amount' => '0','per_thousand_installment' => NULL,'is_fixed_total_interest_amount' => '0','per_thousand_total_interest_amount' => NULL,'is_service_charge_taken_initially' => '0','is_daily_basis' => '0','sms_type' => '["2:loan_disbursement","7:transactions"]','is_principal_amount_divided_into_multiple_installments' => '0','number_of_principal_installment' => '0','overdue_period' => NULL,],
            ['id' => '2','loan_product_id' => '2','interest_rate' => '14.00000','interest_rate_index' => '1.14000000','interest_calculation_method' => 'DFD','decline_period' => NULL,'mode_of_interest' => 'H','effective_date_from' => '2016-01-01','effective_date_to' => NULL,'status' => 'A','note' => NULL,'enforce_number_of_installment' => '1','enforced_install_number' => '-1','is_show_rec_after_loan_period' => '0','is_loan_period_in_day_fixed' => '0','repayment_frequency' => 'M','number_of_installment' => NULL,'is_installment_amt_independent' => '0','schedule_type' => NULL,'collection_period' => 'DD','is_auto_rebate_allowed' => '0','interest_grace_period' => '1_M','interest_calculation_period' => NULL,'is_avoid_multiple_schedule' => '0','cut_off_date' => NULL,'is_auto_cal_installment_amount' => '0','per_thousand_installment' => NULL,'is_fixed_total_interest_amount' => '0','per_thousand_total_interest_amount' => NULL,'is_service_charge_taken_initially' => '0','is_daily_basis' => '0','sms_type' => '["2:loan_disbursement","7:transactions"]','is_principal_amount_divided_into_multiple_installments' => '0','number_of_principal_installment' => '0','overdue_period' => NULL,],
            ['id' => '3','loan_product_id' => '3','interest_rate' => '14.00000','interest_rate_index' => '1.14000000','interest_calculation_method' => 'DFD','decline_period' => NULL,'mode_of_interest' => 'H','effective_date_from' => '2016-01-03','effective_date_to' => NULL,'status' => 'A','note' => NULL,'enforce_number_of_installment' => '0','enforced_install_number' => '-1','is_show_rec_after_loan_period' => '0','is_loan_period_in_day_fixed' => '0','repayment_frequency' => NULL,'number_of_installment' => NULL,'is_installment_amt_independent' => '0','schedule_type' => NULL,'collection_period' => NULL,'is_auto_rebate_allowed' => '0','interest_grace_period' => NULL,'interest_calculation_period' => '0','is_avoid_multiple_schedule' => '0','cut_off_date' => NULL,'is_auto_cal_installment_amount' => '0','per_thousand_installment' => NULL,'is_fixed_total_interest_amount' => '0','per_thousand_total_interest_amount' => NULL,'is_service_charge_taken_initially' => '0','is_daily_basis' => '0','sms_type' => '["2:loan_disbursement","7:transactions"]','is_principal_amount_divided_into_multiple_installments' => '0','number_of_principal_installment' => '0','overdue_period' => NULL,],
            ['id' => '4','loan_product_id' => '4','interest_rate' => '24.00000','interest_rate_index' => '0.00000000','interest_calculation_method' => 'F','decline_period' => NULL,'mode_of_interest' => 'H','effective_date_from' => '2023-01-01','effective_date_to' => NULL,'status' => 'A','note' => NULL,'enforce_number_of_installment' => '0','enforced_install_number' => '-1','is_show_rec_after_loan_period' => '0','is_loan_period_in_day_fixed' => '0','repayment_frequency' => '','number_of_installment' => '1,12','is_installment_amt_independent' => '0','schedule_type' => NULL,'collection_period' => NULL,'is_auto_rebate_allowed' => '0','interest_grace_period' => NULL,'interest_calculation_period' => NULL,'is_avoid_multiple_schedule' => '0','cut_off_date' => NULL,'is_auto_cal_installment_amount' => '0','per_thousand_installment' => NULL,'is_fixed_total_interest_amount' => '0','per_thousand_total_interest_amount' => NULL,'is_service_charge_taken_initially' => '0','is_daily_basis' => '0','sms_type' => '["2:loan_disbursement","7:transactions"]','is_principal_amount_divided_into_multiple_installments' => '0','number_of_principal_installment' => '0','overdue_period' => NULL,],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('loan_product_interest_rates')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('loan_product_interest_rates')->insertBatch($loan_product_interest_rates);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
