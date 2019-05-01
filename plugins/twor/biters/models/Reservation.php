<?php namespace TwoR\Biters\Models;

use Model;

/**
 * Reservation Model
 */
class Reservation extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'twor_biters_reservations';

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
    public $hasMany = [];
    public $belongsTo = [
        'Restaurant' => ['TwoR\Biters\Models\Restaurant'],
        'Pricerange' => ['TwoR\Biters\Models\Pricerange'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
