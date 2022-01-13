<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;
use App\Models\User;
use App\Models\employee;

class themeController extends Controller
{
// User List
    function user_list()
    {
        $data=User::all();
        return view ('userlist',['members'=>$data]);
    }
// Add User
    function add_user()
    {
        return view ('adduser');
    }

    function user_added(Request $request)
    {
       // dd($request);
        
        $new = new User();
        $new->name = $request->name;
        $new->email = $request->email;
        $new->city = $request->city;
        $new->password = bcrypt($request->password);
        $new->save();
        return redirect('user-list');
    }
// user Edit

    function user_edit_form($id)
    {
        $data = User::find($id);
        return view('editform',['data'=>$data]);
    }
    function user_edit(Request $request)
    {       
        $data = User::find($request->id);
        //  dd($data);
        if($data)
        {
        $data->name = $request->name;
        $data->email = $request->email;
        $data->city = $request->city;
        $data->save();
        return redirect('user-list');
        }else
        {
            echo "nothing";
        }
    }
// User Delete
    function user_delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect ('user-list');
    }

    // function login(Request $req){
    //     people::create($req->all());
    //     return back();
    // }
    // function getDAta(){
    //     $data=people::all();
    //     return view('getData',['member'=>$data]);
    // }

    function add_employee(Request $request)
    {
        $new = new employee();
        $new->name = $request->name;
        $new->email = $request->email;
        $new->address = $request->address;
        $new->save();
        return redirect ('employee');
    }
}
