<?php namespace TwoR\Biters\Models;

use Model;

/**
 * Pricerange Model
 */
class Pricerange extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'twor_biters_priceranges';

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
