<?php

namespace App\Http\Controllers;

use App\Services\CommentService;

/**
 * Class CommentController
 * @package App\Http\Controllers
 */
class CommentController extends BaseController
{

    /**
     * CommentController constructor.
     * @param CommentService $service
     */
    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }
}
