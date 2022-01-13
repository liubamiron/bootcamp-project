<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Http\Request\ContactUsRequest;
use App\Http\Controllers\RedirectResponse;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    public function view(){
        return view(‘contacts.contactUs’);
    }
    public function send(ContactUsRequest $request): RedirectResponse
    {
        // dd($request->validated());

        $callback = function (string $test): string {
            return "{$test} input";
        };

        $data = $request->validated();

        \Log::debug($callback('test'), $data);

        \Mail::raw('This is test email', function (Message $message) {
            $message->to('tech@baloon.app');
        });
      
       
        return redirect()->route('contactUs')->withInput($data);
    }
}
