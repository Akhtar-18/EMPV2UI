<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function sendEmail()
    {
        $email = 'akhtarp@ghrix.com';

        $mailData = [
            'title'=>'EMP V2',
            'url' => 'https://emp.ghrixlabs.com/'
        ];

        Mail::to($email)->send(new EmailDemo($mailData));

        return response()->json([
            'message' => 'Email has been sent'
        ], Response::HTTP_OK);
    }


}
