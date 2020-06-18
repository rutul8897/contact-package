<?php

namespace Rutul\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rutul\Contact\Models\Contact;
use Mail;
use Rutul\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact::contact');
	}

	public function send(Request $request)
	{ 
		try
		{ 
			
			Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name,$request->description));
			Contact::create($request->all());
			return redirect()->back();
		}
        catch(\Exception $e)
        {
            return redirect()->back()->withError('something went wrong');;
        }
	}
}
