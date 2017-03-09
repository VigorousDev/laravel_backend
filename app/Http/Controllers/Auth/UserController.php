<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $message = $request->message;
        $status = 200;
        $data = array(
                'status' => $status,
                'user_id' => $id,
                'message' => $message
        );    
        
        return response(json_encode($data), $status, ['Content-Type', 'application/json']);
    }
}
