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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('alias')->nullable();
            $table->string('code')->nullable();
            $table->boolean('is_package')->default(false);
            $table->text('description')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('amount')->nullable();
            $table->decimal('discount')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('tag')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();

            $table->foreignIdFor(App\Models\ItemGroup::class)->nullable();
            $table->foreignIdFor(App\Models\ItemCategory::class)->nullable();
            $table->boolean('has_method')->default(true);
            $table->foreignIdFor(App\Models\ItemUnit::class)->nullable();
            $table->string('specimen_type')->nullable();
            $table->string('test_method')->nullable();
            $table->string('test_method_description')->nullable();
            $table->string('reference_range')->nullable();
            $table->boolean('inhouse_test')->default(true);
            $table->string('test_value')->nullable();
            $table->integer('test_duration')->default(0); // in days
            $table->text('preparation')->nullable();
            $table->text('instructions')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('reporting_template_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
