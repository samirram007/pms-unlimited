<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Company::create([

            'name' => 'Life Fertility Centre',
            'date_of_foundation'=>'2015-07-22',
            'company_type_id' => 1,
            'license_no'=>'20220722',
            'phone'=>'7586963412',
            'address'=>'Thakur Das Babu Lane, Mokdumpur, Malda, West Bengal- 732101',
            'contact_no'=>'7586963412',
            'email' => 'lfc@lifefertilitycentre.com',
            'password' => bcrypt('12345678'),
        ]);
        \App\Models\Company::create([

            'name' => 'Lfc Diagnostics',
            'date_of_foundation'=>'2022-07-23',
            'company_type_id' => 1,
            'license_no'=>'lab023222',
            'phone'=>'7584019388',
            'address'=>'South singatala, Malda, West Bengali- 732103',
            'contact_no'=>'7584019388',
            'email' => 'lfd@lifefertilitycentre.com',
            'password' => bcrypt('12345678'),
        ]
    );
    }
}
    