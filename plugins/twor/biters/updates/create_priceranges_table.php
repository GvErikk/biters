<?php namespace TwoR\Biters\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePricerangesTable extends Migration
{
    public function up()
    {
        Schema::create('twor_biters_priceranges', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('pricerange');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twor_biters_priceranges');
    }
}
