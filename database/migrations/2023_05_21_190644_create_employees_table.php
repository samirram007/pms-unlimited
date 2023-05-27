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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('password')->default(bcrypt('password'));
            $table->foreignIdFor(Company::class)->unsigned()->nullable();
            $table->foreignIdFor(Department::class)->unsigned()->nullable();
            $table->foreignIdFor(Designation::class)->unsigned()->nullable();
             $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->double('salary')->nullable();
            $table->date('doj')->nullable();
            $table->date('dob')->nullable();
            $table->string('qualification')->nullable();
            $table->foreignIdFor(ContractType::class)->default(3); // foreign key to contract_types table
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
