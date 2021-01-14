<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryExhibitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_exhibitor', function (Blueprint $table) {
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('exhibitor_id')->references('id')->on('exhibitors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_exhibitor');
    }
}
