<?php

use App\Models\Item;
use App\Models\Package;
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
        Schema::create('item_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Item::class)->unsigned();
            $table->foreignIdFor(Package::class)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_packages');
    }
};
