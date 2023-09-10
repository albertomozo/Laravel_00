<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(){
     $message =  request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

         return 'datos enviados';
        Mail::to('albertomozodocente@gmail.com')->send(new MessageReceived($message));
       // return new MenssageReceived($messaje);
        // return 'mensaje enviado';     
         return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.'); 
    }
}