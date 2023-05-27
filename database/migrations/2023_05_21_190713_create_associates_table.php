<?php

use App\Models\Company;
use App\Models\ContractType;
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
        Schema::create('associates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->default(bcrypt('password'));
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->foreignIdFor(ContractType::class)->unsigned()->default(2);
            $table->foreignIdFor(Company::class)->unsigned()->nullable();
            $table->double('commission')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associates');
    }
};
