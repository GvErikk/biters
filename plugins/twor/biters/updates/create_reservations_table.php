<?php namespace TwoR\Biters\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('twor_biters_reservations', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('numberofclients');
            $table->integer('distance');
            $table->date('reservationdate');
            $table->string('allergies')->nullable();
            $table->boolean('paid')->default(false);
            $table->integer('restaurant_id');
            $table->integer('pricerange_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twor_biters_reservations');
    }
}
