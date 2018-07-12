<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogitemController extends Controller
{
    public function index()
    {
        return view('blogitem.index');
    }
}