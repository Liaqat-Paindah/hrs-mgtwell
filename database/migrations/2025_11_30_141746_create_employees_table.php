<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // Personal Information
            $table->id();
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('email')->unique();
            $table->string('birth_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('second_phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('current_address')->nullable();
            $table->string('profile')->nullable();
            // Employment Information
            $table->string('employee_id')->unique();
            $table->string('position');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->string('employment_type')->default('Full-time');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('employment_status')->default('active');
            $table->string('work_station')->nullable();
            
            // Financial Information
            $table->string('account_number')->nullable();
            $table->string('gross_salary')->nullable();
            $table->string('tax')->nullable();
            $table->string('net_salary')->nullable();
            
            // Additional Information
            $table->string('nid')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('tin')->nullable();
            $table->string('project')->nullable();

            $table->string('permanent_address')->nullable();
            $table->string('nid_attachment')->nullable();
            $table->string('documents_attachments')->nullable();
            $table->string('cv_attachment')->nullable();

            
            $table->timestamps();

            // Foreign key constraints (added after tables are created)
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
            $table->foreign('manager_id')->references('id')->on('employees')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}