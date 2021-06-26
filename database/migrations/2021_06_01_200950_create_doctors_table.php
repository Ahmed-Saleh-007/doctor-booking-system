<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('mobile')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('session_time')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('deg_id')->nullable();
            $table->foreign('deg_id')
                  ->references('id')
                  ->on('doctor_degrees');
            $table->unsignedBigInteger('spec_id')->nullable();
            $table->foreign('spec_id')
                  ->references('id')
                  ->on('specialists');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries');
            $table->rememberToken();
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
        Schema::dropIfExists('doctors');
    }
}
