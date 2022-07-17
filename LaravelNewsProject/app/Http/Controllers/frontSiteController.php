<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontSiteController extends Controller
{
    function showHome (){
        $users = Models\User::all(); 
        $categories = Models\Category::all(); 
        $posts = Models\Post::all(); 
        return view('User.index', ['users' => $users , 'categories' => $categories , 'posts' => $posts]); 
        
    }
    function showSinglCategory ($id){
        $id=$id;
        $users = Models\User::all(); 
        $categories = Models\Category::all(); 
        $posts = Models\Post::all(); 
        return view('User.SinglCategory', ['id'=>$id,'users' => $users , 'categories' => $categories , 'posts' => $posts]); 
        
    }
    function showSinglPost ($id){
        $id=$id;
        $users = Models\User::all(); 
        $categories = Models\Category::all(); 
        $posts = Models\Post::all(); 
        return view('User.SinglPost', ['id'=>$id,'users' => $users , 'categories' => $categories , 'posts' => $posts]); 
        
    }
    function showLogin (){
        return view('User.login');
    }
    function showRegister (){
        return view('User.register');
    }
}
