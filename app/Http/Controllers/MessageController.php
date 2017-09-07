<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function getNewMessage(){
        $to = User::orderBy('name', 'asc')->get();
        return view('newmessage', ['from' => Auth::user(), 'to' => $to]);
    }

    public function getInbox(){
        $messages = Message::Where('receiver_id', Auth::user()->id)->orderBy('created_at', 'asc')->get();
        return view('messages', ['messages' => $messages]);
    }

    public function getOutbox(){
        $messages = Message::Where('sender_id', Auth::user()->id)->orderBy('created_at', 'asc')->get();
        return view('messages', ['messages' => $messages]);
    }

    public function getViewMessage($message_id){
        $message = Message::find($message_id);
        $from = User::find($message->sender_id)->name;
        $to = User::find($message->receiver_id)->name;
        return view('viewmessage', ['from' => $from, 'to' => $to, 'message' => $message]);
    }

    public function postSendMessage(Request $request){
        $this->validate($request, [
           'from' => 'required',
            'to' => 'required',
            'subject' => 'required|max:200',
            'body' => 'required|max:5000'
        ]);

        $message = new Message();

        $message->sender_id = $request['from'];
        $message->receiver_id = $request['to'];
        $message->subject = $request['subject'];
        $message->body = $request['body'];

        if($message->save())
            return redirect()->route('message.new')->with(['success' => 'Message has been successfully Sent!']);
        else
            return redirect()->route('messages.new')->with(['failure' => 'Sorry! Failed to send the message!']);
    }
}
