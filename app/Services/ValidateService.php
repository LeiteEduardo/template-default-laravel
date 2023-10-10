<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ValidateService
{
    function validation($data, $rules)
    {
        $validator = Validator::make($data,$rules);

        if ($validator->fails()) {
            return response()->json([
                'data' => $validator->errors()->all(),
                'error' => 'Validation Error',
                'status' => '400'
            ], 400);
        } else {
            return response()->json([
                'data' => $data,
                'status' => '200' 
            ], 200);
        }
    }
}