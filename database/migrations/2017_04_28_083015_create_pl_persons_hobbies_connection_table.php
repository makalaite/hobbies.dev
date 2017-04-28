<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlPersonsHobbiesConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pl_persons_hobbies_connection', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('person_id', 36)->index('fk_pl_persons_hobbies_connection_pl_persons1_idx');
			$table->string('hobbie_id', 36)->index('fk_pl_persons_hobbies_connection_pl_hobbies1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pl_persons_hobbies_connection');
	}

}
