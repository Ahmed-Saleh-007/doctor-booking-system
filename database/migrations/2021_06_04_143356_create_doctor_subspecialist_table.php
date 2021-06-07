<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSubspecialistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_subspecialist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_id');
            $table->foreign('doc_id')
                  ->references('id')
                  ->on('doctors')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('subspec_id');
            $table->foreign('subspec_id')
                  ->references('id')
                  ->on('sub_specialists')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('doctor_subspecialist');
    }
}
