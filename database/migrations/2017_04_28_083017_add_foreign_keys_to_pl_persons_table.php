<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pl_persons', function(Blueprint $table)
		{
			$table->foreign('city_id', 'fk_pl_persons_pl_cities')->references('id')->on('pl_cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pl_persons', function(Blueprint $table)
		{
			$table->dropForeign('fk_pl_persons_pl_cities');
		});
	}

}
