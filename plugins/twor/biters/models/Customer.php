<?php namespace TwoR\Biters\Models;

use Model;

/**
 * Customer Model
 */
class Customer extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'twor_biters_customers';

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
