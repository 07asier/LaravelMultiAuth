<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class emailController extends Controller{

    public function send(){

        Mail::send(['text'=>'email'],['name','asier'],function($message){
            $message->to('asier2223@gmail.com','To asier')->subject('Test Email');
            $message->from('asier2223@gmail.com','asier');
        });

    }
}






















