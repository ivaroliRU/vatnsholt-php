<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function events(){
        return view('events');
    }

    public function send_mail(Request $request){

        $data = array('name'=>"Ívar Óli");
        Mail::send('mail', $data, function($message) {
            $message->to('danield18@ru.is', 'Daniel Aron')->subject
                ('Laravel HTML Testing Mail');
            $message->from('ivartheoli@gmail.com','Ívar Óli');
        });

        return response('Hello World', 200);
    }
}
