<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{

    public function home()
    {
        return view('mail.home');
    }

    public function sendemail(Request $get) {
        $this->validate($get, [
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);
        $email = $get->email;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to($email)->send( new SendEmail($subject, $message) );
    }
}
