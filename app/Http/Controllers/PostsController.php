<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    function postview(){
        $posts= Posts::all();

        return view('posts', compact('posts'));
    }

    function addPosts(Request $request){
        $post =new  Posts();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->back()->with('Sucess',"Post Add Sucessfully");
    }
}
