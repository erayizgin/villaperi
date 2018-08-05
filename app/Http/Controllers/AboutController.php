<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

	protected $layout = 'layouts.default';

    public function index()
    {
        $content = DB::select('select id, section, main_title, description from content where section=\'about\'')[0];
        
        return view('about.index', ['content' => $content]);
    }

    public function show()
    {
    	//@yield('title')
    	//$this->layout->content = View::make('about.show');

     	//$this->layout->content = View::make('about.show');
        return view('about.show');
    }
}