<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('number')->unsigned();
            $table->string('status')->default('open');
            $table->string('title');
            $table->text('body')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('assignee_id')->unsigned()->nullable();
            $table->integer('milestone_id')->unsigned()->nullable();
            $table->boolean('locked');
            $table->dateTime('closed_at')->nullable();
            $table->timestamps();
            
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('assignee_id')->references('id')->on('users');
            $table->foreign('milestone_id')->references('id')->on('milestones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('issues');
    }
}
