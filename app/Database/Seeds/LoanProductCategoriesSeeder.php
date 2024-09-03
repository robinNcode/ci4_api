<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class LoanProductCategoriesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class LoanProductCategoriesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $loan_product_categories = [
            ['id' => '1','name' => 'JAGORON','short_name' => 'JAGO','is_savings_deposite_frequency_overridden' => 'N','savings_deposite_frequency' => '','monthly_collection_week' => '','product_category_type' => '1','insert_time' => '2022-04-07 15:30:00','update_time' => '2022-04-10 11:10:36',],
            ['id' => '2','name' => 'AGROSOR','short_name' => 'AGRO','is_savings_deposite_frequency_overridden' => 'N','savings_deposite_frequency' => '','monthly_collection_week' => '','product_category_type' => '2','insert_time' => '2022-04-07 16:04:26','update_time' => NULL,],
            ['id' => '3','name' => 'UTTARAN','short_name' => 'UTTARAN','is_savings_deposite_frequency_overridden' => 'N','savings_deposite_frequency' => '','monthly_collection_week' => '','product_category_type' => '0','insert_time' => '2022-04-10 11:26:54','update_time' => NULL,],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('loan_product_categories')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('loan_product_categories')->insertBatch($loan_product_categories);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
