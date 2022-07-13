<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\contactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function contactPage(){
        $contact=DB::table('contacts')->first();
        return view('Pages.contactPage',compact('contact'));
    }
    public function AllContact(){
        $contacts=Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function allMessage(){
        $contacts=contactForm::all();
        return view('admin.contactForm.index',compact('contacts'));
    }
    public function addContact(){
       return view('admin.contact.addContactInfo');
    }
    public function storeContact(Request $request){
      Contact::insert([
        'email'=>$request->email,
        'phone'=>$request->phone,
        'location'=>$request->location,
        'created_at'=>Carbon::now()
      ]);
      return Redirect()->route('all.contact')->with('success','data inserted successfully');
    }
    public function storeContactForm(Request $request){
      contactForm::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
        'created_at'=>Carbon::now()
      ]);
      return Redirect()->route('contact')->with('message','Your message sent successfully');
    }
    
}
