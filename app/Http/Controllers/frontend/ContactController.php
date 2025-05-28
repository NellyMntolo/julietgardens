<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\frontend\Contact;

class ContactController extends Controller
{
    public function contact() {
        $contact = Contact::all();
        return view ('frontend.contact', ['contact' => $contact]);
    }
}
