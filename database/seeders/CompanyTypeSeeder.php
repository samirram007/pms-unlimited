<?php

namespace Database\Seeders;

use App\Models\CompanyType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyType::create([
            'name' => 'Test Centre',
            'description' => 'This is a Test Centre',
        ]);
        CompanyType::create([
            'name' => 'Fertility Centre',
            'description' => 'This is a Test Centre',
        ]);
        CompanyType::create([
            'name' => 'Eye Centre',
            'description' => 'This is a Test Centre',
        ]);
        CompanyType::create([
            'name' => 'Test2 Centre',
            'description' => 'This is a Test Centre',
        ]);
    }
}
