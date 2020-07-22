<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index() 
    {
        $userId = auth()->id();

        return Message::select(
            'id',
            DB::raw("IF(`from_id`=$userId, true, false) as written_by_me"),            
            'created_at', 
            'content'
        )->get();
    }
     public function store(Request $request) 
     {
        $message = new Message();
        $message->from_id = auth()->id();        
        $message->to_id = $request->to_id;
        $message->content = $request->content;
        $saved = $message->save();

        $data = [];
        $data['success'] = $saved;
        return $data;
     }
}
