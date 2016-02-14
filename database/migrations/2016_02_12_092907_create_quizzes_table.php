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
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('url',64)->nullable();
            $table->string('welcome_title')->nullable();
            $table->string('welcome_description')->nullable();
            $table->string('button_text',24)->nullable();
            $table->boolean('is_public')->default('false');
            $table->integer('user_id')->unsigned();
            $table->integer('tenant_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            // @todo Add Foreign keys to user_id and tenant_id
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
