<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(){
     $message =  request()->validate([
            'name' => 'required'
          
        ]);

       return 'datos enviados';
      
    }
}