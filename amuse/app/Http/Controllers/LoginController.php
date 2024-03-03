<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{
    public function check(Request $request)
    {
     $credentials = $request->validate([
     'email' => ['required'],
     'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) 
        {
           return response()->json([ 'status' => true ,
                                     'message' => "로그인 성공하였습니다."
        ]);
    }
    return response()->json([
        'status' => false,
        'message' => "로그인 실패하였습니다."
    ]);
}
}
