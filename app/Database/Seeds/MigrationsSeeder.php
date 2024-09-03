<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class MigrationsSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class MigrationsSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $migrations = [
            ['id' => '1','version' => '2020-12-28-223112','class' => 'CodeIgniter\\Shield\\Database\\Migrations\\CreateAuthTables','group' => 'default','namespace' => 'CodeIgniter\\Shield','time' => '1725379814','batch' => '1',],
            ['id' => '2','version' => '2021-07-04-041948','class' => 'CodeIgniter\\Settings\\Database\\Migrations\\CreateSettingsTable','group' => 'default','namespace' => 'CodeIgniter\\Settings','time' => '1725379814','batch' => '1',],
            ['id' => '3','version' => '2021-11-14-143905','class' => 'CodeIgniter\\Settings\\Database\\Migrations\\AddContextColumn','group' => 'default','namespace' => 'CodeIgniter\\Settings','time' => '1725379814','batch' => '1',],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('migrations')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('migrations')->insertBatch($migrations);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
