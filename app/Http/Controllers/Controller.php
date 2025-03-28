<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function successResponse($data, $code = 200){
        return response()->json($data, $code);
    }

}
