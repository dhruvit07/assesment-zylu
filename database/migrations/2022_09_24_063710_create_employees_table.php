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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_no');
            $table->unsignedBigInteger('work_dept');
            $table->string('job');
            $table->char('sex', 1);
            $table->date('birth_date')->format('d/m/Y');
            $table->double('salary', 8, 2);
            $table->date('hire_date')->format('d/m/Y');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->foreign('work_dept')->references('id')->on('work_departments')->onDelete('cascade');
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
