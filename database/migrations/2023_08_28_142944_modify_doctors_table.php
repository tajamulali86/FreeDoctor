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
        Schema::table('doctors', function (Blueprint $table) {
            $table->string('phone'); // Add a new column
            $table->string('address'); // Add a new column
            $table->string('experiance'); // Add a new column
            $table->string('degree'); // Add a new column
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
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('phone'); // Rollback the change
            $table->dropColumn('address'); // Rollback the change
            $table->dropColumn('experiance'); // Rollback the change
            $table->dropColumn('degree'); // Rollback the change
    });
}
};
