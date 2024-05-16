<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class adminController extends Controller
{
    public function postData()
    {
        return view('admin.post_page');
    }
    public function addData(Request $request)
    {

        $user=Auth()->user();
        $user_id=$user->id;
        $user_type=$user->usertype;
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
        $post->usertype=$user_type;
        $post->save();
        return redirect()->back()->with('message','Post added successfully');
    }

    public function showPost()
    {
        $post=Post::all();
        return view('admin.show_post',compact('post'));
    }
}
