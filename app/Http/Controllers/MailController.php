<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name','test_case'], function ($message){
           $message->to('testcase489@gmail.com','To admin')->subject('Test_case');
           $message->from('testcase489@gmail.com', 'test_case');
        });
    }
}
