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
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->nullable();
            $table->dateTime('order_date')->nullable();
            $table->foreignIdFor(App\Models\Patient::class)->nullable();
            $table->foreignIdFor(App\Models\Employee::class)->nullable();
            $table->foreignIdFor(App\Models\Associate::class)->nullable();
            $table->foreignIdFor(App\Models\ReferralDoctor::class)->nullable();
            $table->foreignIdFor(App\Models\Company::class)->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('discount')->nullable();
            $table->decimal('tax')->nullable();
            $table->decimal('total')->nullable();
            $table->integer('order_status_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
