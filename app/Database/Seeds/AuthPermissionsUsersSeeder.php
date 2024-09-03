<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class AuthPermissionsUsersSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class AuthPermissionsUsersSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $auth_permissions_users = [
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('auth_permissions_users')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('auth_permissions_users')->insertBatch($auth_permissions_users);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
