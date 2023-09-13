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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('age');
            //modify
            $table->string('Address'); // Add a new column
            $table->string('illness'); // Add a new column
            $table->string('country'); // Add a new column
            $table->string('file_path');
            $table->unsignedBigInteger('user_id'); // Add a foreign key
            $table->foreign('user_id')->references('id')->on('users');
            //modify
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
        Schema::dropIfExists('patients');
    }
};
