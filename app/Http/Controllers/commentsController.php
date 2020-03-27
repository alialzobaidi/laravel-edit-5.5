<?php

namespace App\Http\Controllers;
 use App\Category;
use App\Post;
use App\Tag;
use App\profile;
use App\comment;
use Illuminate\Http\Request;
class commentsController extends Controller
{


    public function store(Request $request,$id){

        $this->validate($request,[
            "body"    => "required",
                        
        ]);
         
        $comments = new comment;
        $comments->body = $request->body;
        $comments->slug  = str_slug($request->body);
        $comments->post_id = $id;
        $comments->user_id = Auth()->user()->id;
        $comments->save();
        
        return redirect()->back();
    }


    public function post($id)
    {
      
        $post = Post::find($id);
       
        // $post->comment = comment::orderBy('updated_at' , 'DESC')->get();
    
        return view('posts.post')->with('post',$post);
        

    }
}
