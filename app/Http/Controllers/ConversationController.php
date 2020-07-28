<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversation;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index() 
    {
        return  Conversation::where('user_id', Auth::user()->id)        
        ->with('contact:id,name')
        ->get(
            [
                'id',
                'contact_id',                
                'has_blocked',
                'listen_notifications',
                'last_message',
                'last_time',                
            ]
        );                
    }
}
