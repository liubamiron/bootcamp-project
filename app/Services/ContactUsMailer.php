<?php

namespace App\Services;

use Illuminate\Mail\Mailer;

class ContactUsMailer
{
    private  Mailer $infrastructureMailer;

    public function  __construct(Mailer $infrastructureMailer)
    {
        $this->infrastructureMailer = $infrastructureMailer;
    }

    public function send(array $data): void

    {
        $this->infrastructureMailer->send(
            'emails.contactUs', 
            [
                'email' => $data['email'],
                'name' => $data['name'],
                'districts' => $data['districts'],
                'department' => $data['department'],
                'messageText' => $data['message'],
           
            ],
            function (Message $message) use ($data) {
                $message->subject('message from ' . $data['email']);
                $message->to('rent_online@gmail.com');
                $message->from('allrent@gmail.com', 'AllRent mailer');
            }
        );
    }

}