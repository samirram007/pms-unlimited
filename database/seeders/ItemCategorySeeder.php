<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/item_category.json');
       // dd($json);
        $list = json_decode($json, true);

        foreach ($list as $item) {
            ItemCategory::query()->updateOrCreate([
                'id' => $item['id'],
                'name' => $item['name'],
                'specimen_type' => $item['specimen_type'],
                'test_method' => $item['test_method'],
                'test_method_description' => $item['test_method_description'],
                'reference_range' => $item['reference_range'],
                'inhouse_test' => $item['inhouse_test'],
                'test_value' => $item['test_value'],
                'item_group_id' => $item['item_group_id'],
                'has_method' => $item['has_method'],
                'created_at' => $item['created_at'],
                'updated_at' => $item['updated_at'],
            ]);
        }
    }
}
