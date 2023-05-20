<?php

namespace App\Http\Controllers;

;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{



    function All_Users (){
        $users = User::where('id', '>', 0)->paginate(5);
    //    $users = User::pagination(5);
        return view('users/users' , ['users'=>$users]);
    }


    function user ($id){
        $user = User::where('id', $id)->first();
        if ($user) {
            return view('users/userDetils' , ['user'=>$user]);
        }
    }

    function addUser(){
      
        return view('users/adduser');
    }

    function saveUser(){
        
            // dd(\request()->all());
            $user_info= request()->all();
            $user = new user();
            $user->name= $user_info['name'];
            $user->email = $user_info['email'];
            $user->password	=$user_info['password'];
            $user->save();
            return to_route("users.index");
    }

    function edit($id){
        $user = User::where('id', $id)->first();
        return view('users/updet',['user'=> $user]);
    }

    function updetUser($id){
        $user_info= request()->all();
        $user = User::where('id', $id)->first();
        $user->name= $user_info['name'];
        $user->email = $user_info['email'];
        $user->password	=$user_info['password'];
        $user->save();
        return to_route("users.index");
        
    }

    

    
    public function deleteUser($id){
      
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect("/users");
    }

}
