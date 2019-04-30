<?php namespace TwoR\Biters\Updates;
/**
 * Created by PhpStorm.
 * User: Erik van Gemert
 * Date: 30/04/2019
 * Time: 12:05
 */
use TwoR\Biters\Models\Restaurant;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends  Seeder{
    public function run(){
        Restaurant::create(['Name' => 'Wolfslaar Restaurant', 'City'=>'Breda', 'Postalcode'=>'4834 SP', 'Street' => 'Wolfslaardreef', 'Number' => '100']);
    }
}