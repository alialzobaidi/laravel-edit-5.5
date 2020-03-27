<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function page($id)
    {
        $category =  Category::findOrFail($id);
     
        $categories = Category::all();
        if ($categories->count() ==0   ) {  
            return redirect()->route('category.create') ;  
        }
        $tags = Tag::all();
        if ($tags->count() ==0 ) {
            return redirect()->route('tag.create') ;    
        }
        
        return view('page')->with('posts',Post::where('formal','1')->where('category_id',$id)->orderBy('id' , 'DESC')->get())
        ->with('categories',$categories)
        ->with('tags',$tags)->with('category',$category);;


    }




    public function index()
    {
        return view('categories.index')->with('categories',Category::all());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'content' => 'required'
        ]);

        $category = new Category;

        $category->name = $request->name;
        $category->content = $request->content;
        $category->save();

         
        return redirect()->back();
        


       // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =  Category::find($id);
        return view('categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =  Category::find($id);
        foreach ($category->posts as $post  ) {
            $post->forceDelete();
        }
        $category->delete();
        return redirect()->route('categories');
    }
}
