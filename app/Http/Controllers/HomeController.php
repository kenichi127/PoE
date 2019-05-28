<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function post(Request $request)
    {
        // Auth::user()->blogs()->create()
        $blog = new Blog;
        $blog->title = $request->input('blog_title');
        $blog->content = $request->input('blog_contents');
        Auth::user()->blogs()->save($blog);
        //Auth::user() means LoginUser
        return redirect('/home');
    }
}