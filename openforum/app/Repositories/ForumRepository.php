<?php

namespace App\Repositories;

use App\Models\Forum;
use InfyOm\Generator\Common\BaseRepository;

class ForumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'forum_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Forum::class;
    }
}
