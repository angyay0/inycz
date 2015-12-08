<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->bigInteger('price');
          $table->text('address');
          $table->text('description');
          $table->integer('type_id')->unsigned();
          $table->integer('operation_id')->unsigned();
          $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
          $table->foreign('operation_id')->references('id')->on('operations')->onDelete('cascade');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
