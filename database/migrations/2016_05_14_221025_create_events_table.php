<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_id')->unsigned();
            $table->string('event');
            $table->integer('user_id')->unsigned();
            $table->dateTime('created_at');
            $table->integer('label_id')->unsigned()->nullable();
            $table->integer('assignee_id')->unsigned()->nullable();
            $table->integer('assigner_id')->unsigned()->nullable();
            $table->integer('milestone_id')->unsigned()->nullable();
            $table->string('rename_from')->nullable();
            $table->string('rename_to')->nullable();
            
            $table->foreign('issue_id')->references('id')->on('issues');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('label_id')->references('id')->on('labels');
            $table->foreign('assignee_id')->references('id')->on('users');
            $table->foreign('assigner_id')->references('id')->on('users');
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
        Schema::drop('events');
    }
}
