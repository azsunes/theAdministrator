<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_pays', function (Blueprint $table) {

            $table->integer('userId');

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');

            $table->double('hourlyRate')->nullable();
            $table->double('salary')->nullable();
            $table->date('date');
            $table->primary(array('date', 'userId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_pays');
    }
}
