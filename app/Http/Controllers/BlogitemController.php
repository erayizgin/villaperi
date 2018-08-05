<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogitemController extends Controller
{
    public function index()
    {
        $blogDetails = DB::select('select * from blog b join blog_pictures bp on b.id = bp.blog_id where b.id = 1');
        
        $blogContent = DB::select('select id, section, main_title, description from content where section=\'alacati\'')[0];
        
        return view('blogitem.index',['blogDetails' => $blogDetails, 'blogContent' => $blogContent]);
    }
}