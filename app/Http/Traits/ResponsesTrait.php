<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ResponsesTrait
{
    public function response($data)
    {
        return response()->json([
            'data' => $data,
        ]);
    }

    public function success(string $message, $data = null): JsonResponse
    {
        return response()->json([
            'success' => true,
            'status' => 'success',
            'message' => $message ?? 'operation successfully',
            'data' => $data
        ]);
    }

    public function error(string $message, $data = null): JsonResponse
    {
        return response()->json([
            'success' => false,
            'status' => 'error',
            'message' => $message ?? 'error occurred',
            'data' => $data,
        ]);
    }
}