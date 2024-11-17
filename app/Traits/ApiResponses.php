<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponses
{
    protected function ok($message, $data)
    {
        return $this->success($message, $data, Response::HTTP_ACCEPTED);
    }

    protected function success($message, $data, $statusCode = Response::HTTP_ACCEPTED)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
            'statusCode' => $statusCode,
        ], $statusCode);
    }

    protected function error($message, $statusCode)
    {
        return response()->json([
            'message' => $message,
            'statusCode' => $statusCode,
        ], $statusCode);
    }
}
