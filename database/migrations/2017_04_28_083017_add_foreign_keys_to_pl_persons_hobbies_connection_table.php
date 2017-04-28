<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPlPersonsHobbiesConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pl_persons_hobbies_connection', function(Blueprint $table)
		{
			$table->foreign('hobbie_id', 'fk_pl_persons_hobbies_connection_pl_hobbies1')->references('id')->on('pl_hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_pl_persons_hobbies_connection_pl_persons1')->references('id')->on('pl_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pl_persons_hobbies_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_pl_persons_hobbies_connection_pl_hobbies1');
			$table->dropForeign('fk_pl_persons_hobbies_connection_pl_persons1');
		});
	}

}
