<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToVenues extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('venues', function($table)
        {
            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('venues', function($table){
            $table->dropForeign('venues_type_id_foreign');
            $table->dropColumn('type_id');
        });
	}

}
