<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index(){
        $mailData=[
            'title'=>'Mamappang',
            'body'=>'Testing Mailing',

        ];
        Mail::to('xooos110@gmail.com')->send(new SendMail($mailData));
    }
}
