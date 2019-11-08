<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

class ContactUsController extends Controller
{
    public function Show(){
        $contact = Contact::all();
        return view('contact.show', [
            'contact' => $contact
        ]);
    } 

    public function Save(Request $request){
        $contact = new Contact();

        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return redirect('/show');
    } 
}
