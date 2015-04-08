<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sheets', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('input_date');
            $table->integer('marketing_countries_id');
            $table->integer('marketing_categories_id');
            $table->integer('users_id');
			$table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sheets');
	}

}
