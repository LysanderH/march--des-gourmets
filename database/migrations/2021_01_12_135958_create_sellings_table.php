<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellings', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('first-name');
            $table->text('email');
            $table->text('tel');
            $table->text('street');
            $table->integer('number');
            $table->text('postal');
            $table->text('town');
            $table->text('country');
            $table->text('children');
            $table->text('adults');
            $table->text('total_children');
            $table->text('total_adults');
            $table->integer('total');
            $table->text('checktoken');
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
        Schema::dropIfExists('sellings');
    }
}
