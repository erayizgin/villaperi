<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsoverviewController extends Controller
{
    public function index()
    {
        return view('roomsoverview.index');
    }
}