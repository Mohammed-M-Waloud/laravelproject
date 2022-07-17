<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Models\Category::orderBy('id','desc')->get(); 
        return view('Admin.Category',compact('category'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        'img'=> 'required',
        'description'=> 'required'
    ]);
        $category=new Category();
        $category->title=$request->title;
        $category->description=$request->description;
        $category_img=$request->file("img");
        $name_img=$category->title.time().'.'.$category_img->extension();
        $category_img->move('CategoryImge', $name_img);
        $category->imge=$name_img;
        $category->save();
        return redirect()->route('Category.index')->with('success','Category Added');      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        // dd($category);
        $category=Category::find($category);


        return view("Admin.Update_Category",compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {

        $category=Category::find($category);
       
        $request->validate([
            'title'=>'required' ,
            'img'=> 'required',
            'description'=> 'required'
        ]);
        $category->title=$request->title;
        $category->description=$request->description;
        $category_img=$request->file("img");
        $name_img=$category->title.time().'.'.$category_img->extension();
        $category_img->move('CategoryImge', $name_img);
        $category->imge=$name_img;
        $category->save();
        return redirect()->route('Category.index')->with('success','Category Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        $category ->delete();
        return redirect()->route('Category.index')->with('success','Category Deleted') ;  }
}
