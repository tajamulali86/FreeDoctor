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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id')->unsigned();
            // $table->integer('patient_id')->unsigned();
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('patient_id'); 
            // $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body')->nullable();
            $table->string('file_path')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade'); // This will cascade delete comments when a patient is deleted
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // 
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
        Schema::dropIfExists('comments');
    }
};
