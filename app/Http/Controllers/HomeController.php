<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
            if($usertype=="user")
            {
                $post=Post::all();
                return view('dashboard',compact('post'));
            }
            elseif($usertype=="admin")
            {
                return view('admin.adminhome');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('post');
    }
    public function homePage()
    {
        $post=Post::all();
        return view('home.homepage',compact('post'));
    }
}
