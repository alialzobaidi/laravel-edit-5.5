<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use\App\User;
use\App\Post;
use\App\Tag;
use\App\Category;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function __construct(){
        $this->middleware(['auth', 'verified']);
    }




    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');

        $categories = Category::all();
        if ($categories->count() ==0   ) {
             
            return redirect()->route('category.create') ;
            
        }


        $tags = Tag::all();
        if ($tags->count() ==0 ) {
             
            return redirect()->route('tag.create') ;
            
        }

        return view('posts.index')->with('posts',Post::where('formal','0')->orderBy('id' , 'DESC')->get())
        ->with('categories',$categories)
        ->with('tags',$tags);

        
    }

    

    public function dashboard()
    {
        return view('dashboard')      
        ->with('tags_count' , Tag::all()->count() ) 
        ->with('post_count' , Post::all()->count() )
        ->with('users_count' , User::all()->count())
        ->with('categories_count' , Category::all()->count())
       ->with('trashed_count' , Post::onlyTrashed()->get()->count())  ;
    }



}
