<?php

use App\Models\Item;
use App\Models\Doctor;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignIdFor(Item::class)->nullable()->default(12);
            $table->foreignIdFor(Doctor::class)->nullable()->default(12);
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_tests');
    }
};
