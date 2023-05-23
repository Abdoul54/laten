<?php

namespace App\Http\Controllers;
use App\Models\EntitySocial;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  
    public function index()
    {
        $entites = EntitySocial::all();
        return view ('entite_social.index')->with('entites', $entites);
    }

    
    public function create()
    {
        return view('entite_social.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');  
    }

    
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

    
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

  
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }

   
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}