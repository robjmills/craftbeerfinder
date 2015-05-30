<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->timestamps();
            $table->softDeletes();
            $table->integer('type_id')->unsigned()->index();
            $table->string('name');
            $table->text('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('twitter');
            $table->string('email');
            $table->text('address');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venues');
	}

}
