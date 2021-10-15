<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    //

    public function messages()
    {
        try {
            
            $messages = Message::with('sender')->get();

            return $messages; 

        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }
        
        // return $messages;
    }

    public function send_message(Request $request)
    {

        try {
            //code...
            $message = Message::create([
                'sender_id' => $request->sender_id,
                'message' => $request->message
            ]);
            
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }

        
        
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
