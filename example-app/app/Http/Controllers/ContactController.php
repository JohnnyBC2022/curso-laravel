<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $allContacts = Contact::all();
        return view('some_view', ['concats'=>$allContacts]);
    }
}
