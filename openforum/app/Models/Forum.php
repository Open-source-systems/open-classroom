<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Forum
 * @package App\Models
 */
class Forum extends Model
{
    use SoftDeletes;

    public $table = 'forums';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'forum_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'forum_type' => 'string'
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
