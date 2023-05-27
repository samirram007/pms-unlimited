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
        Schema::create('test_queues', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\SalesInvoice::class)->nullable();
            $table->foreignIdFor(App\Models\Company::class)->nullable();
            $table->foreignIdFor(App\Models\Item::class)->nullable();
            $table->foreignIdFor(App\Models\Patient::class)->nullable();
            $table->bigInteger('package_id')->nullable();
            $table->datetime('test_date')->nullable();
            $table->datetime('report_date')->nullable();
            $table->datetime('delivery_date')->nullable();
            $table->string('report_file1')->nullable();
            $table->string('report_file2')->nullable();
            $table->string('report_file3')->nullable();
            $table->string('report_file4')->nullable();
            $table->string('report_file5')->nullable();
            $table->enum('status', ['pending', 'inprogress', 'completed', 'delivered'])->default('pending');
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_queues');
    }
};
