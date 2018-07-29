<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = DB::select('select id, photo, thumbs, rank, active from gallery
                                    where active = 1 order by rank');
        
        return view('gallery.index',['galleries' => $galleries]);
    }
}