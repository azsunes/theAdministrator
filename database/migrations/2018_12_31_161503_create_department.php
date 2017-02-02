<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->nullable();

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');

            $table->string('department');
            $table->string('description');
        });

        DB::table('Department')->insert([
            [
                
                'department'=> "I.T department",
                'description'=> "this is a description"
            ]

            ]);
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Department');
    }
}
