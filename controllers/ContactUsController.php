<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\RedirectResponse;
class ContactUsController extends Controller
{
    public function view(){
        return view(‘contacts.contactUs’);
    }
    public function send(Request $request): RedirectResponse
    {
        dd($request->validated());
        
        return redirect()->route(‘contactUs’);
    }
}