<?php


namespace App\Traits;

use Illuminate\Support\Facades\Mail;

trait SendMailTrait
{
    public function sendMail(String $view, Array $data): bool
    {
        $email = $data['email'];
        $subject = $data['subject'];

        Mail::send($view, $data, function($m) use ($email,$subject){
            $m->from("church-of-god@globex-test.com", "$subject - Church of God");

            $m->to($email)->subject($subject);
        });

        return true;
    }
}
