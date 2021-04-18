<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $user = User::orderBy('id','desc')->get();
        $user = User::paginate(5);
        return view('admin.UserHome',[
            'user'=>$user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id){
        $user = User::find($id);
        return view('admin.detailuser',['user'=>$user]);
    }
    public function create()
    {
        return view('admin.UserForm')->with('user',User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->name);
        $request->validate([
            'name' => 'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
        
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        Session()->flash("success","บันทึกข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/UserHome');
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
        $user= User::find($id);
        return view('admin.EditUser',['user'=>$user]);
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
        $request->validate([
            'name' => 'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
        
        ]);
        
        $user= User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;

        
        $user->save();
        Session()->flash("update","แก้ไขข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/UserHome');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user::destroy($id);
        Session()->flash("success","ลบข้อมูลเรียบร้อยแล้ว");
        return redirect('/admin/UserHome');
    }
}
