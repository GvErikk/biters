<?php namespace TwoR\Biters\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateRestaurantsTable extends Migration
{
    public function up()
    {
        Schema::create('twor_biters_restaurants', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Name');
            $table->string('City');
            $table->string('Postalcode');
            $table->string('Street');
            $table->integer('Number');
            $table->integer('pricerange_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twor_biters_restaurants');
    }
}
