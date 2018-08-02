<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VillaController extends Controller
{   
    protected $layout = 'layouts.admin';
    
    public function index()
    {
        return view('villa.index');   
    }
    
    public function trysign(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        echo 'select id, name, email from user where email=\''.$email.'\' and password=\''.$password.'\'';
        
        $user = DB::select('select id, name, email from user where email=\''.$email.'\' and password=\''.$password.'\'')[0];
        
        if(count($user) > 0)
        {
            $userSession = [
                "email" => $user->email,
                "id" => $user->id
            ];
            
            print_r($user);
            Session()->put('userinfo', $userSession);
        }
        
        if (Session::has('userinfo'))       
            Redirect::route('clients.show, $id');
    }
    
    public function show()
    {
        return view('villa.show');
    }
    
}

/*
    //Setting a single variable in session
    //Session::put('key', 'value');
    
    //Retrieving value from session
    //Session::get('key');
    
    //Checking a variable exist in session
    //if (Session::has('email')) {
    
    //Deleting a variable from session
    //Session::forget('key');
    
    //Removing all variables from session
    //Session::flush();
    
    //Setting an array in session
    //$data = Array ( [_token] => P1VsHQZQdpguhWN82n9znnfuvG2aAf7fCk8SJtUV [email] => demo1006@gmail.com [password] => 123456 )
    //Session::push('user', $data);
    
    // array
    // $vars = [
    //  "email" => 'emailim',
    //  "password" => 'passwordum',
    //  "id" => 5
    //  ];
    //Session()->put('blog', $vars);
 
 
 * */