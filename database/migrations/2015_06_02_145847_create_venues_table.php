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
			$table->increments('id');
			$table->timestamps();
            $table->softDeletes();
            $table->integer('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('type_id')->unsigned()->index();
            $table->foreign('type_id')->references('id')->on('types');
            $table->string('name');
            $table->string('image-small');
            $table->string('image-large');
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
