<?php namespace TwoR\Biters\Models;

use Model;

/**
 * Restaurant Model
 */
class Restaurant extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'twor_biters_restaurants';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'Reservation' => ['TwoR\Biters\Models\Reservation'],
    ];
    public $belongsTo = [
        'Pricerange' => ['TwoR\Biters\Models\Pricerange'],
        'Restauranttype' => ['TwoR\Biters\Models\Restauranttype'],
    ];
    public $belongsToMany = [

    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
