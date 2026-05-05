<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('midl_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->date('hire_date');
            $table->date('termination_date')->nullable();
            $table->string('status')->default('active');
            $table->foreignId('position_id')->constrained('positions');
            $table->foreignId('department_id')->constrained('departments');
        });
    }
    public function down(): void 
    { Schema::dropIfExists('employees'); }
};