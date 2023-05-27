<?php

use App\Models\Company;
use App\Models\Associate;
use App\Models\ReferralDoctor;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->string('code')->nullable();
            $table->string('multi_patient_id')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('password')->default(bcrypt('password'));
            $table->foreignIdFor(Company::class)->unsigned()->nullable();
            $table->foreignIdFor(ReferralDoctor::class)->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('contact_no')->nullable();
            $table->enum('gender',['Male','Female','Others'])->default('Male')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('slug')->nullable();
            $table->foreignIdFor(Associate::class)->unsigned()->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
