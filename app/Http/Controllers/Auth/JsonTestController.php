<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class JsonTestController extends Controller
{
    public function test(Request $request)
    {
        $id = $request->id;
        $status = 200;
        $data = array(
                'status' => $status,
                'success' => true,
                'message' => $id
        );    
        
        return response(json_encode($data), $status, ['Content-Type', 'application/json']);
    }
}
