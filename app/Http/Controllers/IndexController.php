<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $rooms = DB::select('select r.id, room_name, picture from rooms r join rooms_pictures rp on r.id = rp.room_id 
                                    where rp.id in (select MIN(id) from rooms_pictures group by room_id)');
        
        return view('index.index',['rooms' => $rooms]);
    }
    
    public function create()
    {
        return view('contact.create');
    }
}
