<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servers', function(Blueprint $table)
		{
			$table->string('uuid')->unique();
			$table->integer('plugin_id')->unsigned();
			$table->string('javaVersion');
			$table->string('systemOS');
			$table->integer('systemCores');
			$table->integer('systemMemory');
			$table->string('serverMod');
			$table->string('serverMCVersion');
			$table->boolean('serverOnline');
			$table->string('serverCountry');
			$table->integer('playerCount');
			$table->foreign('plugin_id')->references('id')->on('plugins');
			$table->primary('uuid');
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
	}

}
