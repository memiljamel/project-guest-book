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
        Schema::create('staffs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('staff_number', 16)->unique();
            $table->string('name', 100);
            $table->string('gender', 100);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20);
            $table->string('job_title', 100);
            $table->foreignUuid('department_id')
                ->constrained('departments', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
