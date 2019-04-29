<?php namespace TwoR\Biters\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCustomerpreferencesTable extends Migration
{
    public function up()
    {
        Schema::create('twor_biters_customerpreferences', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twor_biters_customerpreferences');
    }
}
