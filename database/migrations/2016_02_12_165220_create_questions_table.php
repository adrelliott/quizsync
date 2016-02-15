<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('button_text',24);
            $table->string('type',64);
            $table->smallInteger('order_by')->unsigned();
            $table->integer('quiz_id')->unsigned();
            $table->integer('section_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();
            // @todo Add Foreign keys to id and section_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
