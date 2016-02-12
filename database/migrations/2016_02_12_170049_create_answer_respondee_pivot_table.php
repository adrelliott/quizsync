<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerRespondeePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_respondee', function (Blueprint $table) {
            $table->integer('answer_id')->unsigned();
            $table->integer('respondee_id')->unsigned();
            $table->timestamps();
            // @todo: Add foreign keys answer_id & respondee_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answer_respondee');
    }
}
