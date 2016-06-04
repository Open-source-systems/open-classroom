<?php

namespace App\Repositories;

use App\Models\Classroom;
use InfyOm\Generator\Common\BaseRepository;

class ClassroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Classroom::class;
    }
}
