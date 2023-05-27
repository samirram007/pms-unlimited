<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('specimen_type')->nullable();
            $table->string('test_method')->nullable();
            $table->string('test_method_description')->nullable();
            $table->string('reference_range')->nullable();
            $table->boolean('inhouse_test')->nullable();
            $table->string('test_value')->nullable();
            $table->foreignIdFor(App\Models\ItemGroup::class)->nullable();
            $table->boolean('has_method')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_categories');
    }
};
