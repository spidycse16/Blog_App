<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Follower;

class HomeController extends Controller
{
    public function follow_user($whom,$who)
    {
        $user1=User::find($whom);
        $user2=User::find($who);
        $follower = new Follower;

        // Set follower and following information
        $follower->follower_id = $user2->id;
        $follower->follower_name = $user2->name; // Assuming 'name' is a property in User model
        $follower->following_id = $user1->id;
        $follower->following_name = $user1->name; // Assuming 'name' is a property in User model
      
        // Save the follower information
        $follower->save();
        session()->flash('message', 'You are now following ' . $user1->name . '!');
        return redirect()->back();
    }
    public function alluser()
    {
        $user=User::all();
        return view('home.alluser',compact('user'));
    }
    public function allpost()
    {
        $post=Post::all();
        return view('home.service',compact('post'));
    }
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

    public function show_blog($id)
    {
        $post=Post::find($id);
        return view('home.show_post',compact('post'));
    
    }

    public function user_create_post()
    {
        return view('home.user_post');
    }

    public function add_user_post(Request $request)
    {
        $user=Auth()->user();
        $user_id=$user->id;
        //Post::create($request->all());
        $post=new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $image= $request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image=$image->move('postimage', $imagename);
            $post->image = $imagename;

        }
        $post->poststatus=$request->type;
        $post->user_id=$user_id;
        $post->usertype='user';
        $post->save();
        return redirect()->back()->with('message','Post added successfully');
    }
}
