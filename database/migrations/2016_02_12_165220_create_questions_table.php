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
            $table->string('question_title');
            $table->string('question_description')->nullable();
            $table->string('button_text',24);
            $table->string('question_type',64);
            $table->smallInteger('order_by')->unsigned();
            $table->integer('quiz_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            // @todo Add Foreign keys to question_id and section_id
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
