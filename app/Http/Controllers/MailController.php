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
        $message->to('ruchdi.anprosport@gmail.com', 'To Ruchdi')->subject('Test Send Email');
        $message->from('ruchdi.anprosport@gmail.com', 'Ruchdi');
      });
    }
}
