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
            $table->foreign('marketing_countries_id')
                ->references('marketing_countries_id')->on('marketing_countries')
                ->onDelete('cascade');
            $table->integer('marketing_categories_id');
            $table->foreign('marketing_categories_id')
                ->references('marketing_categories_id')->on('marketing_categories')
                ->onDelete('cascade');
            $table->integer('users_id');
            $table->foreign('users_id')
                    ->references('users_id')->on('users')
                    ->onDelete('cascade');


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
