<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class MailController extends Controller
{
    //
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = '190103291';
        $objDemo->receiver = '190103291';
        Mail::to("190103291@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}