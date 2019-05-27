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

Route::get('/', function () {
    return view('index');
});

Route::get('/events', function () {
    return view('events');
});

Route::post('/send_msg', function(Request $request){
    //$data = $request->json()->all();

    $to_name = 'test';
    $to_email = 'ivartheoli@gmail.com';
    $data = array('name'=>"Sam Jose", "body" => "Test mail");
        
    Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Artisans Web Testing Mail');
        $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
    });
});