<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index(Request $request)
    {   
        return response()->json(Contact::all());
    }

    public function findId($id)
    {   
        return response()->json(Contact::find($id));
    }


    public function save(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->comment = $request->comment;
        $contact->save();
        return response()->json($contact);
    } 

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->comment = $request->comment;
        $contact->save();
        return response()->json($contact);
    }    
    
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $result = $contact->delete();
        return response()->json(['id'=>$result]);
    }    

    public function edit($id)
    {   
        return view('editContact', ['id' => $id]);
    }

    public function images($id)
    {   
        return view('imagesContacts', ['validate' => $id]);
    }
}
