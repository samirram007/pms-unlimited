<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // CompanyTypeSeeder::class,
            // CompanySeeder::class,
            // AdminSeeder::class,
            // DiscountTypeSeeder::class,
            // DepartmentSeeder::class,
            // DesignationSeeder::class,
            // DoctorSeeder::class,
            ItemCategorySeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(UserSeeder::class);
    }
}
