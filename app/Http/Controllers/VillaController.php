<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VillaController extends Controller
{   
    protected $layout = 'layouts.admin';
    protected $actionName;
    
    public function __construct(Request $request)
    {
        $this->actionName = $request->route()->getActionMethod();
        //$menu = DB::select('select * from menu join menusub on menu.id = menusub.main_id');
    }
    
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
    
    public function show(Request $request)
    {
        if ($request->isMethod('post')) {
            //print_r($request);
            DB::update('update content set description = ?, main_title = ?, updated_at = now() where section = \'about\'', 
                                    [$request->editor1, $request->main_title]);
            return response()->json(['success'=>'Data is successfully added']);
        } 
        
        $content = DB::select('select id, main_title, section, description from content where section=\'about\'')[0];

        return view('villa.show',['content' => $content, 'actionName'=> $this->actionName]);
    }
    
    public function region(Request $request)
    {
        if ($request->isMethod('post')) {
            //print_r($request);
            DB::update('update content set description = ?, main_title = ?, updated_at = now() where section = \'alacati\'',
                [$request->editor1, $request->main_title]);
            return response()->json(['success'=>'Data is successfully added']);
        }
        
        //echo $this->actionName;
        
        $content = DB::select('select id, main_title, section, description from content where section=\'alacati\'')[0];
        return view('villa.region',['content' => $content, 'actionName'=> $this->actionName]);
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