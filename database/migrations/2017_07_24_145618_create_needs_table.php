<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('needs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("name");
            $table->string("mail");
            $table->string("company");
            $table->string("question_div");
            $table->string("question");
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
		Schema::drop('needs');
	}

}
