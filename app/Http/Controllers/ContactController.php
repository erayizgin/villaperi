<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = DB::select('select address, telephone1, telephone2 from contact');
        $address = $contact[0]->address;
        $telephone1 = $contact[0]->telephone1;
        $telephone2 = $contact[0]->telephone2;
        return view('contact.index', ['address' => $address, 'telephone1' => $telephone1, 'telephone2' => $telephone2]);
        //By default, Blade {{ }} statements are automatically sent through PHP's htmlspecialchars function to prevent XSS attacks. 
        //If you do not want your data to be escaped, you may use the following syntax:
    }
}