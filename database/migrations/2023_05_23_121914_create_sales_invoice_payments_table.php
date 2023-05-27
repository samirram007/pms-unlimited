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
        Schema::create('sales_invoice_payments', function (Blueprint $table) {
            $table->id();
            $table->string('payment_no')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->foreignIdFor(App\Models\Patient::class)->nullable();
            $table->foreignIdFor(App\Models\SalesInvoice::class)->nullable();
            $table->foreignIdFor(App\Models\Company::class)->nullable();
            $table->decimal('amount')->nullable();
            $table->foreignIdFor(App\Models\PaymentMode::class)->nullable();
            $table->boolean('is_confirm')->default(false);
            $table->string('payer_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('tid')->nullable();
            $table->string('transaction_number')->nullable();
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
        Schema::dropIfExists('sales_invoice_payments');
    }
};
