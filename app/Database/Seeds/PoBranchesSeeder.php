<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class PoBranchesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class PoBranchesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $po_branches = [
            ['id' => '1','name' => 'Head Office','code' => '000','opening_date' => '2016-01-01','sw_start_date_of_operation' => '2022-03-31','branch_images' => NULL,'district_id' => NULL,'thana_id' => NULL,'address' => 'Vill+post: Aminabad, Ward no:08, Upozila: Charfassion, Dist: Bhola.','land_phone' => '','mobile_phone' => '','email' => 'sbsbhola381@gmail.com','fax' => '','id_sequence_no' => NULL,'is_head_office' => '1','is_enabled' => '1','is_independent' => '0','independent_from_date' => NULL,'branch_type' => NULL,'is_offline_branch' => '0','mandatory_savings_proposed_loan_applicable' => '1','is_fingerprint_enabled' => '0','is_other_option_enabled' => '0','is_islamic_branch' => '0','removed_last_month_end_date' => NULL,'last_offline_data_exported_on' => NULL,'work_start_time' => NULL,'work_end_time' => NULL,'notification_messege' => NULL,'lat' => '0','lng' => '0','branch_closing_date' => NULL,'updated_by' => '1','updated_on' => '2024-06-30 14:54:31','insert_time' => '2020-05-27 23:45:00','update_time' => '2024-06-30 14:41:57',],
            ['id' => '2','name' => 'Aminabad','code' => '001','opening_date' => '2016-01-01','sw_start_date_of_operation' => '2022-03-31','branch_images' => NULL,'district_id' => NULL,'thana_id' => NULL,'address' => 'Vill+Post: Aminabad, Ward No: 08, Upozila: Charfassion, Dist: Bhola','land_phone' => '','mobile_phone' => '01733158070','email' => 'sbsbhola381@gmail.com','fax' => '','id_sequence_no' => NULL,'is_head_office' => '0','is_enabled' => '1','is_independent' => '0','independent_from_date' => NULL,'branch_type' => 'B','is_offline_branch' => '0','mandatory_savings_proposed_loan_applicable' => '1','is_fingerprint_enabled' => '0','is_other_option_enabled' => '0','is_islamic_branch' => '0','removed_last_month_end_date' => NULL,'last_offline_data_exported_on' => NULL,'work_start_time' => NULL,'work_end_time' => NULL,'notification_messege' => NULL,'lat' => '0','lng' => '0','branch_closing_date' => NULL,'updated_by' => '1','updated_on' => '2023-06-08 15:58:02','insert_time' => '2022-04-07 14:55:11','update_time' => '2023-06-08 16:15:06',],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('po_branches')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('po_branches')->insertBatch($po_branches);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
