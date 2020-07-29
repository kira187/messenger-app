<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ConversationController extends Controller
{
    public function index() 
    {
        // return  Conversation::where('user_id', Auth::user()->id)        
        // ->with('contact:id,name')
        // ->get(
        //     [
        //         'id',
        //         'contact_id',                
        //         'has_blocked',
        //         'listen_notifications',
        //         'last_message',
        //         'last_time',                
        //     ]
        // );
        
        return DB::table('conversations')
            ->join('users', 'conversations.contact_id', '=', 'users.id')            
            ->select(
                    'conversations.id', 
                    'conversations.contact_id',                
                    'conversations.has_blocked',
                    'conversations.listen_notifications',
                    'conversations.last_message',
                    'conversations.last_time',        
                    'users.name'
                )
            ->where('user_id', Auth::user()->id)
            ->get();
    }
}
