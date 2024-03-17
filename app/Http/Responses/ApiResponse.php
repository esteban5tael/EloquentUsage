<?php

namespace App\Http\Responses;

class ApiResponse
{
    public static function success($message = null, $data = null)
    {
        $return = [
            'succes' => true,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json([$return], 200);
    }
}

/*  */
