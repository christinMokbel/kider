<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Contact;
use Mail;

class Contactcontroller extends Controller
{
    public function contactmail(Request $request){
        $data = $request->validate([
          'name'=>'required|string|max:50',
          'email'=> 'required|string',
          'subject' => 'required',
          'message' => 'required',
         ]);
         Contact::create($data);
         Mail::to('christin@example.com')->send(new ContactMail($data) );
         return redirect('contact');
       }

       public function index(){
        $contacts =Contact::get();
        return view('admin.contacts',compact('contacts'));
            }
        
         public function show(string $id)
            {
                $contact= Contact::findOrFail($id);
                return view('admin.showcontact', compact('contact'));
            }
      
            public function destroy(string $id)
            {
                Contact::where('id', $id)->delete();
                return redirect('contact/contacts');
            }
            public function trashed()
            {
                $contacts=Contact::onlyTrashed()->get();
                return view('admin.trashedcontact', compact('contacts'));
            }
        
            public function forceDelete(string $id)
            {
                Contact::where('id', $id)->forceDelete();
                return redirect('contact/contacts');
            }
        
            public function restore(string $id)
            {
                Contact::where('id', $id)->restore();
                return redirect('contact/contacts');
            }
        
    
}
