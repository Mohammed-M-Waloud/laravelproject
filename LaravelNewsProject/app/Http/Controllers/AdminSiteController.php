<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;
class AdminSiteController extends Controller
{
    
 



    function showDashboard (){
        $users = Models\User::all(); 
        $categories = Models\Category::all(); 
        $posts = Models\Post::all(); 
        return view('Admin.index', ['users' => $users , 'categories' => $categories , 'posts' => $posts]); 
    }
}
//     function showAdmin (){
//         $users = Models\User::all();  
//         return view('Admin.Admin',['users' => $users]);
//     }
//     function Update_Admin ($id){
//         $users = Models\User::all();  
//         return view('Admin.Update_Admin',['users' => $users,'id'=>$id]);
//     }
//     function showCategory (){
//         $categories = Models\Category::all(); 
//         return view('Admin.Category',[ 'categories' => $categories]);
//     }
//     function Update_Category ($id){
//         $categories = Models\Category::all(); 
//         return view('Admin.Update_Category',[ 'categories' => $categories , 'id'=>$id]);
//     }

//     function Update_Post ($id)    {
//         $posts = Models\Post::all(); 
//     $categories = Models\Category::all(); 
// return view('Admin.Update_Post',[ 'posts' => $posts ,'categories' => $categories , 'id'=>$id]);
// }
//     function showLogin (){
//         return view('Admin.login');
//     }

// }
