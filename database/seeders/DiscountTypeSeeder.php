<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiscountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DiscountType::create([
            'id' => 1,
            'name' => 'Flat 10',
            'description' => 'Flat 10 % Discount On Cart',
            'discount_by' => 'percentage',
            'discount' => 10.00,
            'discount_for' => 'cart',
            'is_active' => 1,
            'created_at' => '2022-07-25 23:39:25',
            'updated_at' => '2022-07-25 23:54:38',
        ]);
        \App\Models\DiscountType::create([
            'id' => 2,
            'name' => 'STAFF/SPECIAL PERSON 20',
            'description' => 'STAFF/SPECIAL PERSON 20',
            'discount_by' => 'percentage',
            'discount' => 20.00,
            'discount_for' => 'cart',
            'is_active' => 1,
            'created_at' => '2022-07-25 23:51:15',
            'updated_at' => '2022-07-25 23:51:15',
        ]);
        \App\Models\DiscountType::create([
            'id' => 3,
            'name' => 'Flat Discount',
            'description' => 'Flat Value Discount ₹100',
            'discount_by' => 'value',
            'discount' => 100.00,
            'discount_for' => 'cart',
            'is_active' => 1,
            'created_at' => '2022-07-25 23:52:58',
            'updated_at' => '2022-07-25 23:52:58',
        ]);
        \App\Models\DiscountType::create([
            'id' => 4,
            'name' => 'Test 5',
            'description' => '5% discount on every test',
            'discount_by' => 'percentage',
            'discount' => 5.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-07-25 23:54:22',
            'updated_at' => '2022-07-26 00:02:19',
        ]);
        \App\Models\DiscountType::create([
            'id' => 5,
            'name' => 'TEST 10',
            'description' => '10 % discount on each test',
            'discount_by' => 'percentage',
            'discount' => 10.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-07-26 00:02:07',
            'updated_at' => '2022-07-26 00:02:07',
        ]);
        \App\Models\DiscountType::create([
            'id' => 6,
            'name' => 'TEST 15',
            'description' => null,
            'discount_by' => 'percentage',
            'discount' => 15.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-09-24 07:28:09',
            'updated_at' => '2022-09-24 07:28:09',
        ]);
        \App\Models\DiscountType::create([
            'id' => 7,
            'name' => 'TEST 20',
            'description' => '20 % each test',
            'discount_by' => 'percentage',
            'discount' => 20.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-09-26 16:47:16',
            'updated_at' => '2022-09-26 16:47:16',
        ]);
        \App\Models\DiscountType::create([
            'id' => 8,
            'name' => 'TEST 25',
            'description' => '25% Each Test',
            'discount_by' => 'percentage',
            'discount' => 25.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-09-26 16:47:49',
            'updated_at' => '2022-09-26 16:47:49',
        ]);
        \App\Models\DiscountType::create([
            'id' => 9,
            'name' => 'TEST 30',
            'description' => '30% Each Test',
            'discount_by' => 'percentage',
            'discount' => 30.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-09-26 16:50:04',
            'updated_at' => '2022-09-26 16:52:49',
        ]);
        \App\Models\DiscountType::create([
            'id' => 10,
            'name' => 'TEST 50',
            'description' => '50% Each Test',
            'discount_by' => 'percentage',
            'discount' => 50.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-09-26 19:42:12',
            'updated_at' => '2022-09-26 19:42:12',
        ]);
        \App\Models\DiscountType::create([
            'id' => 11,
            'name' => 'TEST 35',
            'description' => '35 % Each Test',
            'discount_by' => 'percentage',
            'discount' => 35.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-09-27 19:41:56',
            'updated_at' => '2022-09-27 19:41:56',
        ]);
        \App\Models\DiscountType::create([
            'id' => 12,
            'name' => 'TEST 0',
            'description' => 'EACH TEST',
            'discount_by' => 'percentage',
            'discount' => 0.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-10-08 09:23:59',
            'updated_at' => '2022-10-08 09:23:59',
        ]);
        \App\Models\DiscountType::create([
            'id' => 13,
            'name' => 'TEST 40',
            'description' => 'EACH TEST 40',
            'discount_by' => 'percentage',
            'discount' => 40.00,
            'discount_for' => 'test',
            'is_active' => 1,
            'created_at' => '2022-10-08 12:35:58',
            'updated_at' => '2022-10-08 12:35:58',
        ]);

    }
}
