<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarthquakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earthquakes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('year');
            $table->text('Month');
            $table->text('Day');
            $table->text('value');
            $table->text('place');
            $table->text('earthquake level');
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
        Schema::dropIfExists('earthquakes');
    }
}
