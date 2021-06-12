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
            $table->string('name_ar');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->default('avatar.png');
            $table->unsignedBigInteger('deg_id');
            $table->foreign('deg_id')
                  ->references('id')
                  ->on('doctor_degrees');
            $table->unsignedBigInteger('spec_id');
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