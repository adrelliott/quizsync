<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->string('description')->nullable();
            $table->boolean('is_correct')->nullable();
            $table->integer('score')->nullable();
            $table->smallInteger('order_by')->unsigned()->nullable();
            $table->integer('question_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            // @todo Add Foreign keys to question_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
