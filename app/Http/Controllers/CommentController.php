<?php

namespace App\Http\Controllers;

use App\Services\CommentService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $response = $this->response;

        try {
            $data = $this->service->create($request->all());
            $response['message'] = $data['message'];
            $response['data'] = $data['data'];
            $response['code'] = $data['code'];
        } catch (Exception $e) {
            $response['message'] = $e->getMessage();
            $response['data'] = null;
            $response['code'] = is_numeric($e->getCode()) ? $e->getCode() : 500;
        }

        return response()->json([
            'message' => $response['message'],
            'data' => $response['data']
        ], $response['code']);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $response = $this->response;

        try {
            $data = $this->service->update($request->all(), $id);
            $response['message'] = $data['message'];
            $response['data'] = $data['data'];
            $response['code'] = $data['code'];
        } catch (Exception $e) {
            $response['message'] = $e->getMessage();
            $response['data'] = null;
            $response['code'] = is_numeric($e->getCode()) ? $e->getCode() : 500;
        }

        return response()->json([
            'message' => $response['message'],
            'data' => $response['data']
        ], $response['code']);
    }
}
