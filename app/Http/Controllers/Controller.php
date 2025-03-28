<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
<<<<<<< HEAD
    //
}
=======
    protected function successResponse($data, $code = 200){
        return response()->json($data, $code);
    }

}
>>>>>>> 9205812dce7388f65852bf25d2dde0c04963bc99
