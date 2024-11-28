<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('role', ['beheerder', 'projectmanager', 'medewerker']); // Keuze uit Rol
        $table->rememberToken();
        $table->timestamps();
    });

    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->json('available_days');
        $table->json('certificates');
        $table->string('role');
        $table->timestamps();
    });

    Schema::create('Vacation_Records', function (Blueprint $table) {
        $table->id();
        $table->string('employee_name');
        $table->date('end_date');
        $table->string('type');
        $table->timestamps();
    });

    Schema::create('Sick_Reports', function (Blueprint $table) {
        $table->id();
        $table->string('employee_name');
        $table->date('start_date');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('sick_reports');
    Schema::dropIfExists('vacation_records');
    Schema::dropIfExists('employees');
    Schema::dropIfExists('users');
}
};
