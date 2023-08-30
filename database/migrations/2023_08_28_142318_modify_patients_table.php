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
        //
        Schema::table('patients', function (Blueprint $table) {
            $table->string('Address'); // Add a new column
            $table->string('illness'); // Add a new column
            $table->string('country'); // Add a new column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('Address'); // Rollback the change
            $table->dropColumn('illness'); // Rollback the change
            $table->dropColumn('country'); // Rollback the change
        });
    }
};
