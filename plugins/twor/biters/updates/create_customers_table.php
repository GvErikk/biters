<?php namespace TwoR\Biters\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('twor_biters_customers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('naam');
            $table->string('city');
            $table->string('postalcode');
            $table->string('street');
            $table->integer('number');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twor_biters_customers');
    }
}
