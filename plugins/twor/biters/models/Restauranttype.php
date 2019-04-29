<?php namespace TwoR\Biters\Models;

use Model;

/**
 * Restauranttype Model
 */
class Restauranttype extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'twor_biters_restauranttypes';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
