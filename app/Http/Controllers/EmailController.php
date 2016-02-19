<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller {


    public function send(Request $request, $to)
    {
        $user = explode('@', $to)[0];
        Mail::send('mail.template', ['user' => $user], function ($m) use ($to) {
            $m->from('contact@sendeemail.herokuapp.com', 'Your Application');

            $m->to($to, 'User test')->subject('Sendeemail app!');
        });

        return view('end', ['user' => $user, 'to' => $to]);

    }


}