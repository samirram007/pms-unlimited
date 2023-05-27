<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'id' => 1,
                'name' => 'Pathology',
                'status' => 1,
                'tag' => 'Pathology',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'Radiology',
                'status' => 1,
                'tag' => 'Radiology',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 3,
                'name' => 'Cardiology',
                'status' => 1,
                'tag' => 'Cardiology',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 4,
                'name' => 'Neurology',
                'status' => 1,
                'tag' => NULL,
                'created_at' => '2022-07-22 17:08:16',
                'updated_at' => '2022-08-04 00:48:38',
            ],
        ];
    foreach($departments as $department){
        \App\Models\Department::create($department);
    }
    }
}
