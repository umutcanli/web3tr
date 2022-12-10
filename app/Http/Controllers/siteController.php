<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $posts = DB::table('post')->get();
        return view('dashboard', compact('posts'));
    }

    public function faqs()
    {
        return view('faqs');
    }
    public function create()
    {
        return view('create');
    }
    public function veriekle(Request $request)
    {
     $title = $request->title;
     $body = $request->body;
     $category = $request->category;
     $cid = $request->cid;
     $userid = Auth()->user()->id;
     $username = Auth()->user()->name;
     $hash = md5($title);
         
            $veriekle = DB::table('post')->insert([
                'title' => $title,
                'body' => $body,
                'category' => $category,
                'cid' => $cid,
                'user_id' => $userid,
                'name_surname' => $username,
                'slug' => $hash
            ]);
            return redirect()->route('dashboard');

    }
    
}
