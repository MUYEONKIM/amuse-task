<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class RegisterController extends Controller
{
    
    public function store(Request $request)
    {
       $input = $request->all();

       User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password'])
      ]);

          return response()->json(['status' => true,
                                    'message' => "회원가입 완료"   
        
        ]);
        return response()->json(['status' => false,
        'message' => "회원가입 실패"]);
    }

}