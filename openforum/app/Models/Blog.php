<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 * @package App\Models
 */
class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'post_date',
        'attachment',
        'post_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'post_date' => 'datetime',
        'attachment' => 'string',
        'post_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required'
    ];
}
