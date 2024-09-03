<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class AuthIdentitiesSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class AuthIdentitiesSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $auth_identities = [
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('auth_identities')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('auth_identities')->insertBatch($auth_identities);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
