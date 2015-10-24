<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('subject_id');
			$table->integer('user_id');
			$table->date('lesson_date');
			$table->longText('objective');
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
        Schema::drop('objectives');
    }
}
