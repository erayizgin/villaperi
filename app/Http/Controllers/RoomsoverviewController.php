<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomsoverviewController extends Controller
{
    public function index($id)
    {
        $roomDetails = DB::select('select * from rooms r join rooms_pictures rp on r.id = rp.room_id where r.id = ?',[$id]);
        
        return view('roomsoverview.index',['roomDetails' => $roomDetails]);
    }
}