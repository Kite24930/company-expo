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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name');
            $table->string('company_ruby');
            $table->string('company_address');
            $table->string('company_HP');
            $table->string('recruit_department')->nullable(true);
            $table->string('recruit_name');
            $table->string('recruit_ruby');
            $table->string('recruit_tel')->nullable(true);
            $table->string('recruit_email');
            $table->date('establishment');
            $table->integer('capital');
            $table->integer('sales');
            $table->integer('employees');
            $table->integer('schoolmate');
            $table->string('recruit_type')->nullable(true);
            $table->integer('recruit_planned_number')->nullable(true);
            $table->string('location');
            $table->string('target')->nullable(true);
            $table->text('description');
            $table->text('company_PR');
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
