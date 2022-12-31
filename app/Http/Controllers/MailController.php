<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'subject' => 'Versity',
            'body' => 'Hello'
        ];
        try {
            Mail::to('nicolewasike4@gmail.com')->send(new MailNotify($data));
            return response()->json(['Great! Successfully send in your mail']);
        } catch (Exception $e) {
            return response()->json(['Sorry! Please try again latter']);
        }
    }
}
