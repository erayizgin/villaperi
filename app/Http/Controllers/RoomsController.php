<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = DB::select('select * from rooms r join rooms_pictures rp on r.id = rp.room_id');
        
        
        return view('rooms.index',['rooms' => $rooms]);
    }
}