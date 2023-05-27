<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = array(
            array(
                'id' => 1,
                'name' => 'operator',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            array(
                'id' => 2,
                'name' => 'Manager',
                'created_at' => '2022-07-22 11:52:12',
                'updated_at' => '2022-07-22 11:52:12',
            ),
            array(
                'id' => 3,
                'name' => 'Receptionist',
                'created_at' => '2022-08-04 00:45:55',
                'updated_at' => '2022-08-04 00:45:55',
            ),
            array(
                'id' => 4,
                'name' => 'Phlebotomist or Blood Collector',
                'created_at' => '2022-08-04 00:46:08',
                'updated_at' => '2022-08-04 00:46:32',
            ),
            array(
                'id' => 5,
                'name' => 'USG Technician',
                'created_at' => '2022-08-04 00:46:51',
                'updated_at' => '2022-08-17 14:59:41',
            ),
            array(
                'id' => 6,
                'name' => 'Lab Report Prepare',
                'created_at' => '2022-08-04 00:47:12',
                'updated_at' => '2022-08-17 15:00:32',
            ),
            array(
                'id' => 7,
                'name' => 'Lab Technician',
                'created_at' => '2022-08-17 14:59:55',
                'updated_at' => '2022-08-17 14:59:55',
            ),
        );
        foreach($designations as $designation){
            \App\Models\Designation::create($designation);
        }

    }
}
