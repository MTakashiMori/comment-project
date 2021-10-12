<?php

namespace App\Repositories;

use App\Models\Comment;

/**
 * Class CommentRepository
 * @package App\Repositories
 */
class CommentRepository extends BaseRepository
{

    /**
     * CommentRepository constructor.
     * @param Comment $model
     */
    public function __construct(Comment $model)
    {
        $this->model = $model;
        $this->relationship = ['comment', 'post'];
    }
}
