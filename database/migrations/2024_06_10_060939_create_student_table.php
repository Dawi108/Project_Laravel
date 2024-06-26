<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('rollno', 255);
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->date('dob');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->year('admission_year');
            $table->enum('cast_category', ['general', 'obc', 'sc', 'st']);
            $table->text('address');
            $table->string('email')->unique();
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->string('mobile_no');
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
};
