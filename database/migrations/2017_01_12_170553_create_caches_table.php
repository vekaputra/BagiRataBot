<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCachesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caches', function (Blueprint $table) {
			$table->increments('id');
			$table->string('fbId')->unique();
			$table->text('userProfile');
			$table->string('currentEvent');
			$table->string('command');
			$table->text('messages');
			$table->text('value');
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
		Schema::dropIfExists('caches');
	}
}
