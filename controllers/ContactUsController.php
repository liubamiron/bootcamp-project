<?php

namespace App\Http\Controllers;

use App\Http\Request\ContactUsRequest;
// use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Mail\Message;

class ContactUsController extends Controller
{
    public function view(){
        return view('contacts.contactUs');
    }

    public function send(ContactUsRequest $request): RedirectResponse
    {
        // dd($request->validated());

        // $callback = function (string $test): string {
        //      return "{$test} input";
        //  };


        $data = $request->validated();

        \Log::debug($callback('test'), $data);

        \Mail::send(
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

        return redirect()->route('contactUs')->withInput($data);
        
    }
}
