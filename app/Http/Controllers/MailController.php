<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    //
    public function send()
    {
      Mail::send(['text'=>'mail'],['name', 'Ruchdi'], function($message){
        $message->to('laravel@localhost.com', 'To Ruchdi')->subject('Test Send Email');
        $message->from('laravel@localhost.com', 'Ruchdi');
      });
       // $message = mail("laravel@localhost.com", "Subject", "Message");
       // if(!$message){
       //   echo error_get_last()['message'];
       // }
    }
}
