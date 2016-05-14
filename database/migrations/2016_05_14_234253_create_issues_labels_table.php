<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_label', function (Blueprint $table) {
            $table->integer('issue_id')->unsigned();
            $table->integer('label_id')->unsigned();
            
            $table->foreign('issue_id')->references('id')->on('issues');
            $table->foreign('label_id')->references('id')->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('issue_label', function (Blueprint $table) {
            //
        });
    }
}
