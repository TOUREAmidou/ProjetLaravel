<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTache extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listtache', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('UserId');
            $table->integer('ListId');
            $table->date('DateEcheance');
            $table->integer('Accomplie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listtache');
    }
}
