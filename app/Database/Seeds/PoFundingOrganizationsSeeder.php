<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use ReflectionException;

/**
 * Short description of this class usages
 * @class PoFundingOrganizationsSeeder
 * @generated_by RobinNcode\db_craft
 * @package App\Database\Seeds
 * @extend CodeIgniter\Database\Seeder
 * @generated_at 03 September, 2024 10:20:49 PM
 */

class PoFundingOrganizationsSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run(): void
    {
        // Table Data ...
        $po_funding_organizations = [
            ['id' => '1','name' => 'PKSF','division_name' => NULL,'division_code' => NULL,'division_type' => NULL,'division_status' => '1','concern_person' => 'NAN','address' => 'Vill+Post: Aminabad, Ward No: 08, Upozila: Charfassion, Dist: Bhola','land_phone' => '','mobile_phone' => '01733158070','email' => 'sbsbhola381@gmail.com','funding_org_type' => '0','parent_id' => NULL,'is_division' => '0','insert_time' => '2022-04-07 15:37:02','update_time' => NULL,],
            ['id' => '2','name' => 'OWN FUND','division_name' => NULL,'division_code' => NULL,'division_type' => NULL,'division_status' => '1','concern_person' => 'NAN','address' => 'Vill+Post: Aminabad, Ward No: 08, Upozila: Charfassion, Dist: Bhola','land_phone' => '','mobile_phone' => '01733158070','email' => 'sbsbhola381@gmail.com','funding_org_type' => '3','parent_id' => NULL,'is_division' => '0','insert_time' => '2022-04-07 16:02:15','update_time' => NULL,],
        ];


        // Cleaning up the table before seeding ...
        $this->db->table('po_funding_organizations')->truncate();

        //Using Query Builder Class ...
        try {
        $this->db->table('po_funding_organizations')->insertBatch($po_funding_organizations);
        } catch (ReflectionException $e) {
            throw new ReflectionException($e->getMessage());
        }
    }
}
