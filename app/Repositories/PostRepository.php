<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 * @package App\Repositories
 */
class PostRepository extends BaseRepository
{

    /**
     * PostRepository constructor.
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
