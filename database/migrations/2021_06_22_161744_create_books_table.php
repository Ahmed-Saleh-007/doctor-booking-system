<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();

            $table->enum('day', ['FRIDAY', 'MONDAY', 'SATURDAY', 'SUNDAY', 'THURSDAY', 'TUESDAY', 'WEDNESDAY']);
            $table->double('fees', 15, 2);
            $table->boolean('confirm')->default(0);
            $table->date('date');
            $table->time('time');

            $table->foreign('doctor_id')
                ->references('id')->on('doctors')
                ->onDelete('set null');

            $table->foreign('address_id')
                ->references('id')->on('doctor_addresses')
                ->onDelete('set null');

            $table->foreign('patient_id')
                ->references('id')->on('patients')
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
        Schema::dropIfExists('books');
    }
}
