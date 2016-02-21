<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePluginsServersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plugin_server', function (Blueprint $table) {
			$table->integer('plugin_id')->unsigned();
			$table->string('server_id')->unsigned();
			$table->foreign('plugin_id')->references('id')->on('plugins');
			$table->foreign('server_id')->references('uuid')->on('servers');
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
