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
        Schema::create('test_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Item::class);
            $table->foreignIdFor(App\Models\ItemUnit::class)->nullable();
            $table->foreignIdFor(App\Models\ItemGroup::class)->nullable();
            $table->foreignIdFor(App\Models\ItemCategory::class)->nullable();
            $table->foreignIdFor(App\Models\SpecimenType::class)->nullable();
            $table->foreignIdFor(App\Models\TestMethod::class)->nullable();
            $table->text('test_method_description')->nullable();
            $table->string('reference_range')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_configs');
    }
};
