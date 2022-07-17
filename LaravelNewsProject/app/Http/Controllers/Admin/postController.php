<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models;
class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Models\Post::orderBy('id','desc')->get(); 
        $categories = Models\Category::all(); 
        return view('Admin.Post',[ 'posts' => $posts , 'categories' => $categories ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required' ,
            'category'=> 'required',
            'img'=> 'required',
            'description'=> 'required'
        ]);
        $post=new post();
        $post->title=$request->title;
        $post->cat_id=$request->category;
        $post->description=$request->description;
        $post_img=$request->file('img');
        $name_img=$post->title.time().'.'.$post_img->extension();
        $post_img->move('PostImge',$name_img);
        $post->imge=$name_img;
        $post->save();
        return redirect()->route('Post.index')->with('success','Post Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit( $post)
    {
        $categories = Models\Category::all();
        $post=Post::find($post);
        return view("Admin.Update_Post",['post' => $post , 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $post)
    {
        $post=Post::find($post);
        $request->validate([
            'title'=>'required' ,
            'category'=> 'required',
            'img'=> 'required',
            'description'=> 'required'
        ]);
        $post->title=$request->title;
        $post->cat_id=$request->category;
        $post->description=$request->description;
        $post_img=$request->file('img');
        $name_img=$post->title.time().'.'.$post_img->extension();
        $post_img->move('PostImge',$name_img);
        $post->imge=$name_img;
        $post->save();
        return redirect()->route('Post.index')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect()->route('Post.index')->with('success','Post Deleted') ;  }
}
