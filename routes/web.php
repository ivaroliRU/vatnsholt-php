<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index');

Route::get('/events', 'PageController@events');

//Route::post('send_msg', 'PageController@send_mail');

Route::post('/send_msg', function (Request $request) {
    $data = json_decode($request->getContent(), true);

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $mess = $data['mess'];   

    $mail_data = array('name'=>$name, 'email'=>$email, 'phone'=>$phone, 'mess'=>$mess);
    
    
    Mail::send('mail', $mail_data, function($message) {
        $message->to('info@hotelvatnsholt.is', 'Hotel Vatnsholt')->subject
            ('Message From Website');
        $message->from('vatnsholt.messages@gmail.com','Vatnsholt Messages');
    });

    return response('Message sent', 200);
});