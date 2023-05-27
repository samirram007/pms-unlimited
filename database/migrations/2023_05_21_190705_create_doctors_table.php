<?php

use App\Models\Company;
use App\Models\Department;
use App\Models\Designation;
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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('code')->nullable();
            $table->string('password')->default(bcrypt('password'));
            $table->foreignIdFor(Designation::class)->unsigned()->nullable();
            $table->foreignIdFor(Department::class)->unsigned()->nullable();
            $table->foreignIdFor(Company::class)->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->date('dob')->nullable();
            $table->date('doj')->nullable();
            $table->string('qualification')->nullable();
            $table->string('visiting_charge')->nullable();
            $table->string('availablility')->nullable()->comment('1=Available, 0=Not Available all other values are  allowed');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignIdFor(ContractType::class)->unsigned()->default(2);
            $table->decimal('salary')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
