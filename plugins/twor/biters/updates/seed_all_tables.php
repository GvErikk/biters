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
        Restaurant::create(['Name' => 'Restaurant Zuyd', 'City'=>'Breda', 'Postalcode'=>'4818 JA', 'Street' => 'Ginnekenweg', 'Number' => '35']);
        Restaurant::create(['Name' => 'Colins Breda', 'City'=>'Breda', 'Postalcode'=>'4818 JE', 'Street' => 'Ginnekenweg', 'Number' => '24']);
        Restaurant::create(['Name' => 'Tante Betsie', 'City'=>'Breda', 'Postalcode'=>'4811 ZL', 'Street' => 'Sint Janstraat', 'Number' => '16']);
        Restaurant::create(['Name' => 'Turks Restaurant Lades', 'City'=>'Breda', 'Postalcode'=>'4811 HS', 'Street' => 'Oude Vest', 'Number' => '19']);
    }
}