<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(
            ['text' => 'mail'],
            ['name' => 'I'],
            function ($message) {
                $message->to('mudraya.od@gmail.com', 'To you')->subject('Test email');
                $message->from('hatsu.miku.chan.ny@gmail.com','I');
            }
        );
    }
}
