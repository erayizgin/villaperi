<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

	protected $layout = 'layouts.default';

    public function index()
    {
        return view('about.index');
    }

    public function show()
    {
    	//@yield('title')
    	//$this->layout->content = View::make('about.show');

     	//$this->layout->content = View::make('about.show');
        return view('about.show');
    }
}