<?php

namespace App\Http\Controllers\Helpers;


class Utils
{
    public static function buildReturnSuccessStatement($data)
    {
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public static function buildReturnErrorStatement($exception)
    {
        return response()->json([
            'success' => false,
            'msg' => $exception
        ]);
    }
}
