<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller {


    public function send(Request $request, $to)
    {

        Mail::send('mail.template', ['user' => 'Admin'], function ($m) use ($to) {
            $m->from('contact@sendmail.app', 'Your Application');

            $m->to($to, 'User test')->subject('Your Reminder!');
        });

        return view('end', ['user' => 'my friend', 'to' => $to]);

    }


}