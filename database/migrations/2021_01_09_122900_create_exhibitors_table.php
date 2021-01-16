<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->id();
            $table->text('company');
            $table->text('name');
            $table->text('firstname');
            $table->text('email');
            $table->text('phone');
            $table->text('street');
            $table->text('house_number');
            $table->integer('postal');
            $table->text('village');
            $table->text('country');
            $table->longText('description');
            $table->boolean('accepted');
            $table->text('logo')->nullable();
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
        Schema::dropIfExists('exhibitors');
    }
}
