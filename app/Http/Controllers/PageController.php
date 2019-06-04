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

    /*public function send_mail(Request $request){
        $data = json_decode($request->getContent(), true);
        //echo("Sending mail...");
        echo($data);

        return response($data, 200);

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $mess = $data['mess'];   

        $mail_data = array('name'=>$name, 'email'=>$email, 'phone'=>$phone, 'mess'=>$mess);
        
        
        Mail::send('mail', $mail_data, function($message) {
            $message->to('info@hotelvatnsholt.is', 'Hótel Vatnsholt')->subject
                ('Message From Website');
            $message->from('vatnsholt.messages@gmail.com','Vatnsholt Messages');
        });
        return response('Message sent', 200);
    }*/
}