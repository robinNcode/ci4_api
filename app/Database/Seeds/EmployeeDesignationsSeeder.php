<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class EmployeeDesignationsSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class EmployeeDesignationsSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $employee_designations = [
            ['id' => '1','department_id' => '1','name' => 'Executive Derector','code' => '01','short_name' => 'ED','minimum_salary' => '17000','is_manager' => NULL,'report_sorting_order' => '1','loan_approval_amount' => '200000.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '2','department_id' => '2','name' => 'Accoutns Officer','code' => '08','short_name' => 'Accounts','minimum_salary' => '8000','is_manager' => NULL,'report_sorting_order' => '6','loan_approval_amount' => '0.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '3','department_id' => '1','name' => 'Field Officer','code' => '08','short_name' => 'FO','minimum_salary' => '8000','is_manager' => NULL,'report_sorting_order' => '6','loan_approval_amount' => '0.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '4','department_id' => '1','name' => 'Branch Manager','code' => '06','short_name' => 'BM','minimum_salary' => '10000','is_manager' => NULL,'report_sorting_order' => '4','loan_approval_amount' => '100000.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '5','department_id' => '1','name' => 'Assistent Credit Co-rdinetor','code' => '03','short_name' => 'ACC','minimum_salary' => '13000','is_manager' => NULL,'report_sorting_order' => '1','loan_approval_amount' => '0.00','is_approver' => '0','is_loan_proposal_approver' => '0',],
            ['id' => '6','department_id' => '1','name' => 'Credit Co-ordinator','code' => '02','short_name' => 'CC','minimum_salary' => '14000','is_manager' => NULL,'report_sorting_order' => '1','loan_approval_amount' => '300000.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '7','department_id' => '1','name' => 'Area Manager','code' => '04','short_name' => 'AM','minimum_salary' => '12000','is_manager' => NULL,'report_sorting_order' => '3','loan_approval_amount' => '150000.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '8','department_id' => '1','name' => 'Senior Brance Manager','code' => '05','short_name' => 'SBM','minimum_salary' => '11000','is_manager' => NULL,'report_sorting_order' => '4','loan_approval_amount' => '100000.00','is_approver' => '1','is_loan_proposal_approver' => '0',],
            ['id' => '9','department_id' => '1','name' => 'Senior Field Officer','code' => '07','short_name' => 'SFO','minimum_salary' => '9000','is_manager' => NULL,'report_sorting_order' => '6','loan_approval_amount' => '0.00','is_approver' => '0','is_loan_proposal_approver' => '0',],
            ['id' => '10','department_id' => '1','name' => 'Asistent Field Officer','code' => '09','short_name' => 'AFO','minimum_salary' => '7000','is_manager' => NULL,'report_sorting_order' => '6','loan_approval_amount' => '0.00','is_approver' => '0','is_loan_proposal_approver' => '0',],
            ['id' => '11','department_id' => '1','name' => 'Pion','code' => '10','short_name' => 'Pion','minimum_salary' => '6000','is_manager' => NULL,'report_sorting_order' => '6','loan_approval_amount' => '0.00','is_approver' => '0','is_loan_proposal_approver' => '0',],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('employee_designations')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('employee_designations')->insertBatch($employee_designations);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
