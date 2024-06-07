<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('rollno');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->date('dob');
            $table->string('gender');
            $table->year('year');
            $table->string('cast_category');
            $table->text('address');
            $table->string('email')->unique();
            $table->string('blood_group');
            $table->bigInteger('mobile_no');
            $table->string('photo')->nullable();
            $table->string('abc_id', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
