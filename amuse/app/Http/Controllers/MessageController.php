<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function message(Request $request)
    {
       $input = $request->all();

       Message::create([
        'title' => $input['title'],
        'content' => $input['content'],
      ]);

          return response()->json(['status' => true,
                                    'message' => "메시지 등록이 완료되었습니다."   
        
        ]);
        return response()->json(['status' => false, 
                                    'message' => "메시지 등록이 실패하였습니다."]);
    }
}
