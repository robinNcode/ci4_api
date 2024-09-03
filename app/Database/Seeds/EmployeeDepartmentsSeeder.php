<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class EmployeeDepartmentsSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class EmployeeDepartmentsSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $employee_departments = [
            ['id' => '1','name' => 'MIS','code' => '001','mnemonic' => NULL,],
            ['id' => '2','name' => 'Accounts','code' => '002','mnemonic' => NULL,],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('employee_departments')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('employee_departments')->insertBatch($employee_departments);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
