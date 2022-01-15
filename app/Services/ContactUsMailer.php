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

} 