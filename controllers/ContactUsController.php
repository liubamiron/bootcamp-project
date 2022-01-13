<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Request\ContactUsRequest;
use App\Http\Controllers\RedirectResponse;
class ContactUsController extends Controller
{
    public function view(){
        return view(‘contacts.contactUs’);
    }
    public function send(ContactUsRequest $request): RedirectResponse
    {
        // dd($request->validated());

        $data = $request->validated();

        \Log::debug($callback('test'), $data);
        
       
        return redirect()->route('contactUs')->withInput($data);
    }
}
