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
        Schema::create('test_examination_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Item::class);
            $table->foreignIdFor(App\Models\Doctor::class);
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_examination_reports');
    }
};
