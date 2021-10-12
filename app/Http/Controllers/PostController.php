<?php

namespace App\Http\Controllers;

use App\Services\PostService;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends BaseController
{

    /**
     * PostController constructor.
     * @param PostService $service
     */
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
