<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_addresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();

            $table->text('address_en');
            $table->text('address_ar');
            $table->integer('fees');

            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();

            $table->foreign('doctor_id')
                  ->references('id')->on('doctors')
                  ->onDelete('set null');

            $table->foreign('district_id')
                  ->references('id')->on('districts')
                  ->onDelete('set null');
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
        Schema::dropIfExists('doctor_addresses');
    }
}
