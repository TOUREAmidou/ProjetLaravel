<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretaTableTache extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tache', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('UserId');
			$table->string('Description');
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tache');
	}

}
