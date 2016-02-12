<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quiz_title');
            $table->string('quiz_description')->nullable();
            $table->string('quiz_url',64)->nullable();
            $table->boolean('is_public')->default('false');
            $table->integer('user_id')->unsigned();
            $table->integer('tenant_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            // @todo Add Foriegn keys to user_id and tenant_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('quizzes');
    }
}
