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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            //modify
            $table->string('phone'); // Add a new column
            $table->string('address'); // Add a new column
            $table->string('experiance'); // Add a new column
            $table->string('degree'); // Add a new column
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
        Schema::dropIfExists('doctors');
    }
};
