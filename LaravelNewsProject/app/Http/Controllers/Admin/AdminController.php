<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = User::all(); 
        return view('Admin.Admin',compact("User"));
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
        'name'=>'required' ,
        'email'=> 'required',
        'password'=> 'required'
    ]);
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->save();
        return redirect()->route('Admin.index')->with('success','Admin Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($User)
    {
        $User=User::find($User);
        return view("Admin.Update_Admin",compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $User)
    {
        $User=User::find($User);
        $request->validate([
            'name'=>'required' ,
            'email'=> 'required',
            'password'=> 'required'
        ]);
            $User->name=$request->name;
            $User->email=$request->email;
            $User->password=$request->password;
            $User->save();
            return redirect()->route('Admin.index')->with('success','Admin Updated');        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('Admin.index')->with('success','Admin Deleted') ;  }
}
