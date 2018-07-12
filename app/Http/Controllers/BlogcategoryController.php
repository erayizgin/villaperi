<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogcategoryController extends Controller
{
    public function index()
    {
        return view('blogcategory.index');
    }
}