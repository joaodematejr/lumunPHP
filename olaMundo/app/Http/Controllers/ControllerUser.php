<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ControllerUser extends BaseController
{
    //
    public function show($id)
    {
        return response()->json(['name' => 'Abigail', 'state' => 'CA'], 200);
    }
}
