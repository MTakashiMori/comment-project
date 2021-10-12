<?php

namespace App\Services;

use App\Repositories\CommentRepository;

/**
 * Class CommentService
 * @package App\Services
 */
class CommentService extends BaseService
{

    /**
     * CommentService constructor.
     * @param CommentRepository $repository
     */
    public function __construct(CommentRepository $repository)
    {
        $this->repository = $repository;
    }
}
