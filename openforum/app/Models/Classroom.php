<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classroom
 * @package App\Models
 */
class Classroom extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'type',
        'private_post'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'type' => 'string',
        'private_post' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];
}
