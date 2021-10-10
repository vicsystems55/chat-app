<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function messages()
    {
        
        
        return $messages;
    }

    public function create_message(Request $request)
    {
        
        
        
        return $message;
    }

    public function fire_events(Request $request)
    {
        try {
            //code...
            $event = event(new \App\Events\NewChatEvent('newTask'));

            return $event;
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
        
        
        
        return $event;
    }
}
