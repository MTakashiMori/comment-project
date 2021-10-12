<?php

namespace App\Services;

use App\Repositories\PostRepository;

/**
 * Class PostService
 * @package App\Services
 */
class PostService extends BaseService
{

    /**
     * PostService constructor.
     * @param PostRepository $repository
     */
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }
}
